<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                TextInput::make('email')
                    ->label('Endereço de Email')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->label('Telefone')
                    ->tel(),
                TextInput::make('company')
                    ->label('Empresa'),
                TextInput::make('subject')
                    ->label('Assunto')
                    ->required(),
                Textarea::make('message')
                    ->label('Mensagem')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
