<?php

namespace App\Filament\Resources\HalaqohsResource\Pages;

use App\Filament\Resources\HalaqohsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHalaqohs extends ListRecords
{
    protected static string $resource = HalaqohsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
