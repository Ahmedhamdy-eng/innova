<?php

namespace App\Filament\Resources\TherapeuticAreaResource\Pages;

use App\Filament\Resources\TherapeuticAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTherapeuticAreas extends ListRecords
{
    protected static string $resource = TherapeuticAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
