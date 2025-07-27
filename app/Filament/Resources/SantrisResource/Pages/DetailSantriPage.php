<?php

namespace App\Filament\Resources\SantrisResource\Pages;

use Filament\Actions;
use App\Models\Santri;
use App\Models\Halaqoh;
use Filament\Infolists\Infolist;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\DatePicker;
use Filament\Infolists\Components\Section;
use App\Filament\Resources\SantrisResource;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\Actions as Actioninfolist;

class DetailSantriPage extends ViewRecord
{
    protected static string $resource = SantrisResource::class;
    
    protected static ?string $title = 'Detail Santri';

    protected function getHeaderActions(): array
    {
        return [
            // Tambahkan aksi header jika diperlukan
        ];
    }

    protected function getViewData(): array
    {
        return [
            'data' => [],
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
       
            // dd($reportweek);
        return $infolist
            ->schema([
                Actioninfolist::make([
                    Action::make('tambah ziyadah')
                    ->form([
                        Select::make('Teacher_id')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->Teacher_id)
                        ->searchable()
                        ->options(Halaqoh::get()->pluck('nama_ustadz','id'))
                        ->preload(),
                    Textinput::make('ziyadah')
                        ->type('number')
                        ->minValue('0')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->ziyadah)
                        ->required()
                        ->nullable(),
                    Textinput::make('mudarosah')
                        ->type('number')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->mudarosah)
                        ->required()
                        ->nullable(),
                    Textinput::make('murojaah_baru')
                        ->type('number')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->murojaah_baru)
                        ->required()
                        ->nullable(),
                    DatePicker::make('date')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->date)
                        ->required(),
                    Select::make('status')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->status)
                        ->searchable()
                        ->options([
                            'ziyadah' => 'ziyadah',
                            'murojaah' => 'murojaah',
                            'nyimak' => 'nyimak',
                            'ziyadah & murojaah' => 'ziyadah & murojaah',
                            'tidak setoran' => 'tidak setoran',
                            'persiapan tasmi' => 'persiapan tasmi',
                            'persiapan ujian juz' => 'persiapan ujian juz',
                        ]),
                    Select::make('absen')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->absen)
                        ->searchable()
                        ->options([
                            'hadir' => 'hadir',
                            'izin' => 'izin',
                            'sakit' => 'sakit',
                            'alpha' => 'alpha',
                        ]),
                    Select::make('ujian_juz')
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->ujian_juz)
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
                        ->default(fn()=>$this->record->report()->orderBy('id','desc')->first()?->tasmi)
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
                    ])
                    ->action(function(array $data,Santri $santri){
                        $santri->report()->create($data);
                    })
                ]),
                Tabs::make('Tabs')
                ->tabs([
                    Tabs\Tab::make('Data Santri')
                        ->schema([
                            ImageEntry::make('photo'),
                            TextEntry::make('nama'),
                            TextEntry::make('tanggal_lahir'),
                            TextEntry::make('nis'),
                            TextEntry::make('alamat'),
                            TextEntry::make('kelas'),
                            TextEntry::make('status'),
                        
                        ])->columns(2),
                    Tabs\Tab::make('Laporan Tahfizh')
                        ->schema([
                            // RepeatableEntry::make('Report')
                            // ->schema([
                                // TextEntry::make('ziyadah'),
                                // TextEntry::make('mudarosah'),
                                // TextEntry::make('murojaah_baru'),
                                // TextEntry::make('status'), 
                                // TextEntry::make('ujian_juz'),
                                // TextEntry::make('tasmi'),
                                // TextEntry::make('date'),
                            // ])->columns(8)
                            ViewEntry::make('Report')
                            ->view('components.santris-reports')
                            ->viewData([
                                'reports' => fn (Santri $record) => $record->reports->toArray()
                            ])
                        ]),
                    
                    Tabs\Tab::make('Grafik ziyadah')
                        ->schema([
                            ViewEntry::make('graph')
                                ->view('components.chart-ziyadah')
            
                        ]),

                        Tabs\Tab::make('Grafik murojaah')
                        ->schema([
                            ViewEntry::make('graph')
                                ->view('components.chart-murojaahbaru')
                               
                        ]), 
            ])
        ])->columns(1);
    }
}
