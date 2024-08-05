<?php

namespace App\Filament\Resources\OurValuesResource\Pages;

use App\Filament\Resources\OurValuesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurValues extends EditRecord
{
    protected static string $resource = OurValuesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
