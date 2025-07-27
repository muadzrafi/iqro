<?php

namespace App\Filament\Resources\SantrisResource\Pages;

use App\Filament\Resources\SantrisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSantris extends ListRecords
{
    protected static string $resource = SantrisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
