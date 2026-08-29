<?php

namespace App\Filament\Resources\AboutWorkflowSteps\Pages;

use App\Filament\Resources\AboutWorkflowSteps\AboutWorkflowStepResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAboutWorkflowStep extends ViewRecord
{
    protected static string $resource = AboutWorkflowStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
