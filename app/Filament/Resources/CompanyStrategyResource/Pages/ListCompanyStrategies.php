<?php

namespace App\Filament\Resources\CompanyStrategyResource\Pages;

use App\Filament\Resources\CompanyStrategyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyStrategies extends ListRecords
{
    protected static string $resource = CompanyStrategyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
