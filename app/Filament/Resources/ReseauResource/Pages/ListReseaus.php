<?php

namespace App\Filament\Resources\ReseauResource\Pages;

use App\Filament\Resources\ReseauResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReseaus extends ListRecords
{
    protected static string $resource = ReseauResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
