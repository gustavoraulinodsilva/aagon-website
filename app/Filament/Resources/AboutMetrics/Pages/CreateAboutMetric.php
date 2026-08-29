<?php

namespace App\Filament\Resources\AboutMetrics\Pages;

use App\Filament\Resources\AboutMetrics\AboutMetricResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutMetric extends CreateRecord
{
    protected static string $resource = AboutMetricResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
