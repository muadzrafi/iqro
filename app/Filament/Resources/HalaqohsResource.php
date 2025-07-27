<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HalaqohsResource\Pages;
use App\Filament\Resources\HalaqohsResource\RelationManagers;
use App\Models\Halaqoh;
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

class HalaqohsResource extends Resource
{
    protected static ?string $model = Halaqoh::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = "Halaqoh";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('nama_ustadz')
              ->autofocus()
              ->required()
              ->placeholder(__('nama ustadz')),
            TextInput::make('ketua_halaqoh')
              ->autofocus()
              ->required()
              ->placeholder(__('ketua halaqoh')),
            Select::make('status')
              ->options([
                'active' => 'Active',
                'inactive' => 'Inactive',
              ])
              ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('nama_ustadz')
                ->searchable()
                ->sortable()
                ->placeholder(__('nama ustadz')),
            TextColumn::make('ketua_halaqoh')
                ->searchable()
                ->sortable()
                ->placeholder(__('ketua halaqoh')),
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
            'index' => Pages\ListHalaqohs::route('/'),
            'create' => Pages\CreateHalaqohs::route('/create'),
            'edit' => Pages\EditHalaqohs::route('/{record}/edit'),
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
