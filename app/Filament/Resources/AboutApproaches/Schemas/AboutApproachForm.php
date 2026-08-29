<?php

namespace App\Filament\Resources\AboutApproaches\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AboutApproachForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->label('Número')
                    ->required()
                    ->numeric(),
                TextInput::make('title')
                    ->label('Título')
                    ->required(),
                Textarea::make('description')
                    ->label('Descrição')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->label('Ordem')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->label('Ativo')
                    ->onColor('success')
                    ->offColor('danger')
                    ->required(),
            ]);
    }
}
