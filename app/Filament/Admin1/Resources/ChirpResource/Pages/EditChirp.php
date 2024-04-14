<?php

namespace App\Filament\Admin1\Resources\ChirpResource\Pages;

use App\Filament\Admin1\Resources\ChirpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChirp extends EditRecord
{
    protected static string $resource = ChirpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
