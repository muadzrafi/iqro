<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Enums\FiltersLayout;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('name')
              ->autofocus()
              ->required()
              ->placeholder(__('name')),
            Select::make('santris_id')
              ->searchable()
              ->relationship('santris', 'nama')
              ->preload(),
            Select::make('halaqohs_id')
              ->searchable()
              ->relationship('halaqohs', 'nama_ustadz')
              ->preload(),
            Select::make('walisantri_id')
              ->searchable()
              ->relationship('walisantri', 'nama')
              ->preload(),
            TextInput::make('email')
              ->email()
              ->required()
              ->placeholder(__('Email')),
            TextInput::make('password')
              ->password()
              ->revealable()
              ->required(fn($context)=>$context==='create'),
            Select::make('roles')
              ->multiple()
              ->relationship('roles', 'name')
              ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            TextColumn::make('santris.nama')
                ->searchable()
                ->sortable(),
            TextColumn::make('halaqohs.nama_ustadz')
                ->searchable()
                ->sortable(),
            TextColumn::make('walisantri.nama')
                ->searchable()
                ->sortable(),
            TextColumn::make('email')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
            SelectFilter::make('roles')
                ->relationship('roles','name')
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
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
