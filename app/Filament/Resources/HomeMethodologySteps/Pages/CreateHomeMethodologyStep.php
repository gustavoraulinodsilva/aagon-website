<?php

namespace App\Filament\Resources\HomeMethodologySteps\Pages;

use App\Filament\Resources\HomeMethodologySteps\HomeMethodologyStepResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeMethodologyStep extends CreateRecord
{
    protected static string $resource = HomeMethodologyStepResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
