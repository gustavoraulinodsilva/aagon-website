<?php

namespace App\Filament\Resources\AboutMetrics\Pages;

use App\Filament\Resources\AboutMetrics\AboutMetricResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutMetrics extends ListRecords
{
    protected static string $resource = AboutMetricResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
