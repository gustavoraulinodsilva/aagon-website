<?php

namespace App\Filament\Resources\ServiceLifecycleSteps\Pages;

use App\Filament\Resources\ServiceLifecycleSteps\ServiceLifecycleStepResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServiceLifecycleStep extends EditRecord
{
    protected static string $resource = ServiceLifecycleStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
