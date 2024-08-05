<?php

namespace App\Filament\Resources\OurValuesResource\Pages;

use App\Filament\Resources\OurValuesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurValues extends ListRecords
{
    protected static string $resource = OurValuesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
