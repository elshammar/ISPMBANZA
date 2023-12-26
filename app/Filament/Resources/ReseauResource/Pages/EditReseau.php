<?php

namespace App\Filament\Resources\ReseauResource\Pages;

use App\Filament\Resources\ReseauResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReseau extends EditRecord
{
    protected static string $resource = ReseauResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
