<?php

namespace App\Filament\Resources\CompanyStrategyResource\Pages;

use App\Filament\Resources\CompanyStrategyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyStrategy extends EditRecord
{
    protected static string $resource = CompanyStrategyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
