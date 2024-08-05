<?php

namespace App\Filament\Resources\TherapeuticAreaResource\Pages;

use App\Filament\Resources\TherapeuticAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTherapeuticArea extends EditRecord
{
    protected static string $resource = TherapeuticAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
