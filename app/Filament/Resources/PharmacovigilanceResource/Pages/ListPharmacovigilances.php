<?php

namespace App\Filament\Resources\PharmacovigilanceResource\Pages;

use App\Filament\Resources\PharmacovigilanceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPharmacovigilances extends ListRecords
{
    protected static string $resource = PharmacovigilanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
