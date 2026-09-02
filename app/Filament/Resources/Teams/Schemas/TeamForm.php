<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    FileUpload::make('image')
                    ->label('Imagem')
                    ->image()
                    ->disk('public')
                    ->directory('storage')
                    ->preserveFilenames()
                    ->previewable(false)
                    ->required(),
                TextInput::make('name')
                    ->label('Nome') 
                    ->required(),
                TextInput::make('role')
                    ->label('Cargo')
                    ->required(),
                Textarea::make('bio')
                    ->label('Biografia')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('linkedin')
                    ->label('LinkedIn')
                    ->required(),
                TextInput::make('number')
                    ->label('Número')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('order')
                    ->label('Ordem')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
