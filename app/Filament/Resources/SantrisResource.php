<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Santri;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput; 
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SantrisResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SantrisResource\RelationManagers;

class SantrisResource extends Resource
{
    protected static ?string $model = Santri::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = "Santri";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Select::make('walisantri_id')
                ->relationship('walisantri','nama')
                ->searchable()
                ->preload(),
            TextInput::make('nama')
              ->autofocus()
              ->required()
              ->placeholder(__('nama')),
            Select::make('jenis_kelamin')
              ->options([
                'Ikhwan' => 'Ikhwan',
                'Akhwat' => 'Akhwat',
              ]),
            TextInput::make('nis')
              ->autofocus()
              ->required()
              ->placeholder(__('NIS')),
            DatePicker::make('tanggal_lahir')
              ->format('Y-m-d')
              ->placeholder(__('tanggal lahir')),
            TextInput::make('kelas')
              ->required()
              ->placeholder(__('kelas')),
            Select::make('status')
              ->options([
                'active' => 'Active',
                'inactive' => 'Inactive',
              ])
            ->preload(),
            FileUpload::make('photo')
            ->avatar()
            ->directory('santri-photos') // tambahkan direktori khusus
            ->image() // memastikan hanya file gambar
            ->imageEditor() // opsional: tambahkan editor gambar
            ->preserveFilenames() // opsional: pertahankan nama file asli
            ->required() // jika foto wajib diisi
            ->disk('public') // tentukan disk secara eksplisit
            ->nullable()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('nama')
                ->searchable()
                ->sortable(),
            TextColumn::make('walisantri.nama')
                ->searchable()
                ->sortable(),
            TextColumn::make('jenis_kelamin')
                ->searchable()
                ->sortable(),
            TextColumn::make('nis')
                ->searchable()
                ->sortable(),
            TextColumn::make('tanggal_lahir')
                ->searchable()
                ->sortable(),
            TextColumn::make('kelas')
                ->searchable()
                ->sortable(),
            TextColumn::make('status')
                ->searchable()
                ->sortable(),     
            ImageColumn::make('photo')  
                ->sortable(),         
                    ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('detail')
                ->label('detail')
                ->url(fn(Model $report):string=>"/admin/santris/$report->id/detail")
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSantris::route('/'),
            'create' => Pages\CreateSantris::route('/create'),
            'edit' => Pages\EditSantris::route('/{record}/edit'),
            'view' => Pages\DetailSantriPage::route('/{record}/detail'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        if(!auth()->user()->hasRole('Superadmin')){
            return parent::getEloquentQuery()->where('walisantri_id',auth()->user()->parent_id);
        }
        return parent::getEloquentQuery();
    }
    // region Scopes
    // public static function canViewAny(): bool
    // {
    //     return auth()->user()->hasPermission("view", static::getModel());
    // }


    // public static function canEdit(Model $record): bool
    // {
    //     return auth()->user()->hasPermission("update", static::getModel()); 
    // }
    

    public static function canDeleteAny(): bool
    {
        return auth()->user()->hasPermission("delete", static::getModel());
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasPermission("create", static::getModel());
    }
}
