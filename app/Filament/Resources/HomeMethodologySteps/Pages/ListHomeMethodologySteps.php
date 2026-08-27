<?php

namespace App\Filament\Resources\HomeMethodologySteps\Pages;

use App\Filament\Resources\HomeMethodologySteps\HomeMethodologyStepResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeMethodologySteps extends ListRecords
{
    protected static string $resource = HomeMethodologyStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
