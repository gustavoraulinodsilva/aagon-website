<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informações Principais (Hero)')
                    ->description('Dados principais e identificação do serviço.')
                    ->schema([
                        TextInput::make('number')
                            ->label('Número')
                            ->required()
                            ->numeric(),
                        TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->unique(ignoreRecord: true),
                        Textarea::make('description')
                            ->label('Descrição')
                            ->required()
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Seção O Desafio')
                    ->description('Textos explicativos sobre os problemas resolvidos.')
                    ->schema([
                        Toggle::make('show_challenge')
                            ->label('Exibir seção')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true)
                            ->columnSpanFull(),
                        TextInput::make('challenge_tag')
                            ->label('Tag (ex: O Desafio)'),
                        TextInput::make('challenge_title')
                            ->label('Título da seção'),
                        Textarea::make('challenge_description')
                            ->label('Descrição do Desafio')
                            ->required()
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Seção Escopo / Entregáveis')
                    ->description('Lista de entregas e itens inclusos.')
                    ->schema([
                        Toggle::make('show_deliverables')
                            ->label('Exibir seção')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true)
                            ->columnSpanFull(),
                        TextInput::make('deliverable_tag')
                            ->label('Tag (ex: Escopo)'),
                        TextInput::make('deliverable_title')
                            ->label('Título da seção'),
                        TagsInput::make('deliverables')
                            ->label('Lista de Entregáveis')
                            ->placeholder('Digite o item e aperte Enter')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Seção Metodologia')
                    ->description('Títulos e tags da seção de metodologia.')
                    ->schema([
                        Toggle::make('show_methodology')
                            ->label('Exibir seção')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true)
                            ->columnSpanFull(),
                        TextInput::make('methodology_tag')
                            ->label('Tag (ex: Metodologia)'),
                        TextInput::make('methodology_title')
                            ->label('Título da seção'),
                    ])->columns(2),

                Section::make('Seção Stack e Tecnologias')
                    ->description('Tecnologias utilizadas no serviço.')
                    ->schema([
                        Toggle::make('show_tech_stack')
                            ->label('Exibir seção')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true)
                            ->columnSpanFull(),
                        TextInput::make('tech_tag')
                            ->label('Tag (ex: Stack)')
                            ->required(),
                        TagsInput::make('tech_stack')
                            ->label('Lista de Tecnologias')
                            ->placeholder('Digite a tech e aperte Enter')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Títulos Complementares e Configurações')
                    ->description('Títulos auxiliares de seções e status de exibição.')
                    ->schema([
                        TextInput::make('project_title')
                            ->label('Título do Projeto Relacionado')
                            ->required(),
                        TextInput::make('capability_title')
                            ->label('Título das Capacidades')
                            ->required(),
                        TextInput::make('order')
                            ->label('Ordem de Exibição')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true)
                            ->label('Serviço Ativo no Site')
                            ->required(),
                    ])->columns(2),
            ]);
    }
}
