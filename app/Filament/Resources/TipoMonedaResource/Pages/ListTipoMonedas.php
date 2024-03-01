<?php

namespace App\Filament\Resources\TipoMonedaResource\Pages;

use App\Filament\Resources\TipoMonedaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipoMonedas extends ListRecords
{
    protected static string $resource = TipoMonedaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
