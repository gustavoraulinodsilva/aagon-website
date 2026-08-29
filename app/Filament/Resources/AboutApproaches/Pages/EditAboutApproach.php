<?php

namespace App\Filament\Resources\AboutApproaches\Pages;

use App\Filament\Resources\AboutApproaches\AboutApproachResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutApproach extends EditRecord
{
    protected static string $resource = AboutApproachResource::class;

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
