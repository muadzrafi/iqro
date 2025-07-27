<?php

namespace App\Filament\Resources\SantrisResource\Pages;

use App\Filament\Resources\SantrisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSantris extends EditRecord
{
    protected static string $resource = SantrisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
