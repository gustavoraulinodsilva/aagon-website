<?php

namespace App\Filament\Resources\AboutMetrics\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AboutMetricForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('value')
                    ->label('Valor')
                    ->required()
                    ->numeric(),
                TextInput::make('suffix')
                    ->label('Sufixo')
                    ->nullable(),
                TextInput::make('label')
                    ->label('Rótulo')
                    ->required(),
                TextInput::make('order')
                    ->label('Ordem')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->label('Ativo')
                    ->default(true)
                    ->onColor('success')
                    ->offColor('danger')
                    ->required(),
            ]);
    }
}
