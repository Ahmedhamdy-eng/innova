<?php

namespace App\Filament\Resources\OurStrategicStrengthResource\Pages;

use App\Filament\Resources\OurStrategicStrengthResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurStrategicStrengths extends ListRecords
{
    protected static string $resource = OurStrategicStrengthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
