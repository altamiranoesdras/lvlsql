<?php

namespace App\Filament\Resources\TipoCuentaResource\Pages;

use App\Filament\Resources\TipoCuentaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipoCuentas extends ListRecords
{
    protected static string $resource = TipoCuentaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
