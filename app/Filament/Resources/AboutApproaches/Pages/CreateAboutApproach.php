<?php

namespace App\Filament\Resources\AboutApproaches\Pages;

use App\Filament\Resources\AboutApproaches\AboutApproachResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutApproach extends CreateRecord
{
    protected static string $resource = AboutApproachResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
