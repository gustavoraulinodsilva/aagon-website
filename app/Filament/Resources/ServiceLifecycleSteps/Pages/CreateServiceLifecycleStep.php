<?php

namespace App\Filament\Resources\ServiceLifecycleSteps\Pages;

use App\Filament\Resources\ServiceLifecycleSteps\ServiceLifecycleStepResource;
use Filament\Resources\Pages\CreateRecord;

class CreateServiceLifecycleStep extends CreateRecord
{
    protected static string $resource = ServiceLifecycleStepResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
