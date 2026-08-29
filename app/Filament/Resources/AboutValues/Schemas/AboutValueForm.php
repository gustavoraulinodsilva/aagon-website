<?php

namespace App\Filament\Resources\AboutValues\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AboutValueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('value')
                    ->label('Valor')
                    ->required(),
                TextInput::make('order')
                    ->label('Ordem')
                    ->numeric()
                    ->default(0)
                    ->required(),
                Toggle::make('is_active')
                    ->label('Ativo')
                    ->default(true)
                    ->onColor('success')
                    ->offColor('danger')
                    ->required()
            ]);
    }
}
