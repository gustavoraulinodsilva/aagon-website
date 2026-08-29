<?php

namespace App\Filament\Resources\AboutWorkflowSteps\Pages;

use App\Filament\Resources\AboutWorkflowSteps\AboutWorkflowStepResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutWorkflowStep extends EditRecord
{
    protected static string $resource = AboutWorkflowStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
