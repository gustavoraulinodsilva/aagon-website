<?php

namespace App\Filament\Resources\AboutApproaches\Pages;

use App\Filament\Resources\AboutApproaches\AboutApproachResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutApproaches extends ListRecords
{
    protected static string $resource = AboutApproachResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
