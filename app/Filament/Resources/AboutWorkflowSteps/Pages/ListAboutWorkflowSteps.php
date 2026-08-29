<?php

namespace App\Filament\Resources\AboutWorkflowSteps\Pages;

use App\Filament\Resources\AboutWorkflowSteps\AboutWorkflowStepResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutWorkflowSteps extends ListRecords
{
    protected static string $resource = AboutWorkflowStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
