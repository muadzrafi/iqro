<?php

namespace App\Filament\Resources\HalaqohsResource\Pages;

use App\Filament\Resources\HalaqohsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHalaqohs extends EditRecord
{
    protected static string $resource = HalaqohsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
