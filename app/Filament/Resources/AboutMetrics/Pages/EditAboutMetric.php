<?php

namespace App\Filament\Resources\AboutMetrics\Pages;

use App\Filament\Resources\AboutMetrics\AboutMetricResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutMetric extends EditRecord
{
    protected static string $resource = AboutMetricResource::class;

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
