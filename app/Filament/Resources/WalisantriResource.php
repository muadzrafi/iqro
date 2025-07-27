<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WalisantriResource\Pages;
use App\Filament\Resources\WalisantriResource\RelationManagers;
use App\Models\Walisantri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class WalisantriResource extends Resource
{
    protected static ?string $model = Walisantri::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('nama')
              ->autofocus()
              ->required()
              ->placeholder(__('nama')),
            Select::make('Student_id')
                    ->searchable()
                    ->relationship('santri', 'nama')
                    ->preload(),
            TextInput::make('alamat')
              ->required()
              ->placeholder(__('alamat')),
            Select::make('status')
              ->options([
                'active' => 'Active',
                'inactive' => 'Inactive',
              ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('nama')
                ->searchable()
                ->sortable(),
            TextColumn::make('santri.nama')
                ->searchable()
                ->sortable(),
            TextColumn::make('alamat')
                ->searchable()
                ->sortable(),
            TextColumn::make('status')
                ->searchable()
                ->sortable(),       
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWalisantris::route('/'),
            'create' => Pages\CreateWalisantri::route('/create'),
            'edit' => Pages\EditWalisantri::route('/{record}/edit'),
        ];
    }
    // region Scopes
    public static function canViewAny(): bool
    {
        return auth()->user()->hasPermission("view", static::getModel());
    }
     public static function canEditAny(): bool
    {
        return auth()->user()->hasPermission("update", static::getModel()); 
    }
    

    public static function canDeleteAny(): bool
    {
        return auth()->user()->hasPermission("delete", static::getModel());
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasPermission("create", static::getModel());
    }

}
