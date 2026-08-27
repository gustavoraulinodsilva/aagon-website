<?php

namespace App\Filament\Resources\HomeMethodologySteps\Pages;

use App\Filament\Resources\HomeMethodologySteps\HomeMethodologyStepResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeMethodologyStep extends EditRecord
{
    protected static string $resource = HomeMethodologyStepResource::class;

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
