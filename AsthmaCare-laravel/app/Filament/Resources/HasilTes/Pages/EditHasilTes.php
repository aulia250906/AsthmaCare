<?php

namespace App\Filament\Resources\HasilTes\Pages;

use App\Filament\Resources\HasilTes\HasilTesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHasilTes extends EditRecord
{
    protected static string $resource = HasilTesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
