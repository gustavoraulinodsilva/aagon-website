<?php

namespace App\Filament\Resources\AboutWorkflowSteps\Pages;

use App\Filament\Resources\AboutWorkflowSteps\AboutWorkflowStepResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutWorkflowStep extends CreateRecord
{
    protected static string $resource = AboutWorkflowStepResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
