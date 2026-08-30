<?php

namespace App\Filament\Resources\ServiceLifecycleSteps\Pages;

use App\Filament\Resources\ServiceLifecycleSteps\ServiceLifecycleStepResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServiceLifecycleSteps extends ListRecords
{
    protected static string $resource = ServiceLifecycleStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
