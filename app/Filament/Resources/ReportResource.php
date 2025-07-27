<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('Student_id')
                    ->searchable()
                    ->relationship('santri', 'nama')
                    ->preload(),
                Select::make('Teacher_id')
                    ->searchable()
                    ->relationship('halaqoh', 'nama_ustadz')
                    ->preload(),
                Textinput::make('ziyadah')
                    ->required()
                    ->type('number')
                    ->MinValue(0)
                    ->MaxValue(604)
                    ->nullable(),
                Textinput::make('mudarosah')
                    ->required()
                    ->type('number')
                    ->MinValue(0)
                    ->MaxValue(604)
                    ->nullable(),
                Textinput::make('murojaah_baru')
                    ->required()
                    ->type('number')
                    ->MinValue(0)
                    ->MaxValue(604)
                    ->nullable(),
                DatePicker::make('date')
                    ->required(),
                Select::make('status')
                    ->searchable()
                    ->options([
                        'sanad' => 'Sanad',
                        'ziyadah' => 'Ziyadah',
                        'murojaah' => 'Murojaah',
                        'ziyadah & murojaah' => 'Ziyadah & Murojaah',
                        'tidak setoran' => 'Tidak Setoran',
                        'persiapan tasmi' => 'Persiapan Tasmi',
                        'persiapan ujian juz' => 'Persiapan Ujian Juz',
                    ]),
                Select::make('absen')
                    ->searchable()
                    ->options([
                        'hadir' => 'hadir',
                        'izin' => 'izin',
                        'sakit' => 'sakit',
                        'alpha' => 'alpha',
                    ]),
                Select::make('ujian_juz')
                    ->searchable()
                    ->options([
                        'Belum Ujian' => 'Belum Ujian',
                        'Juz 1' => 'Juz 1',
                        'Juz 2' => 'Juz 2',
                        'Juz 3' => 'Juz 3',
                        'Juz 4' => 'Juz 4',
                        'Juz 5' => 'Juz 5',
                        'Juz 6' => 'Juz 6',
                        'Juz 7' => 'Juz 7',
                        'Juz 8' => 'Juz 8',
                        'Juz 9' => 'Juz 9',
                        'Juz 10' => 'Juz 10',
                        'Juz 11' => 'Juz 11',
                        'Juz 12' => 'Juz 12',
                        'Juz 13' => 'Juz 13',
                        'Juz 14' => 'Juz 14',
                        'Juz 15' => 'Juz 15',
                        'Juz 16' => 'Juz 16',
                        'Juz 17' => 'Juz 17',
                        'Juz 18' => 'Juz 18',
                        'Juz 19' => 'Juz 19',
                        'Juz 20' => 'Juz 20',
                        'Juz 21' => 'Juz 21',
                        'Juz 22' => 'Juz 22',
                        'Juz 23' => 'Juz 23',
                        'Juz 24' => 'Juz 24',
                        'Juz 25' => 'Juz 25',
                        'Juz 26' => 'Juz 26',
                        'Juz 27' => 'Juz 27',
                        'Juz 28' => 'Juz 28',
                        'Juz 29' => 'Juz 29',
                        'Juz 30' => 'Juz 30',
                    ]),
                    Select::make('tasmi')
                    ->searchable()
                    ->options([
                        'Belum tasmi' => 'Belum Tasmi',
                        '5 Juz' => '5 Juz',
                        '10 Juz' => '10 Juz',
                        '15 Juz' => '15 Juz',
                        '20 Juz' => '20 Juz',
                        '25 Juz' => '25 Juz',
                        '30 Juz' => '30 Juz',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('santri.nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('halaqoh.nama_ustadz')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('ziyadah')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('mudarosah')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('murojaah_baru')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('date')
                    ->searchable()
                    ->sortable('latest_date'),
                TextColumn::make('status')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('absen')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('ujian_juz')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tasmi')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('Teacher_id')
                ->relationship('halaqoh','nama_ustadz')
            ])
            ->modifyQueryUsing(function(Builder $query){
                if(auth()->user()->hasRole('Santri')){
                    return $query->where('Student_id',auth()->user()->santris_id);
                }
            })
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
    // region Scopes
    public static function canViewAny(): bool
    {
        return auth()->user()->hasPermission("view", static::getModel());
    }


    public static function canEdit(Model $record): bool
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
