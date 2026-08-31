<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Schemas\Components\Grid as ComponentsGrid;
use Filament\Schemas\Components\Tabs as ComponentsTabs;
use Filament\Schemas\Components\Tabs\Tab as TabsTab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ComponentsTabs::make('Detalhes do Projeto')
                    ->tabs([
                        TabsTab::make('Informações Gerais')
                            ->schema([
                                ComponentsGrid::make(2)->schema([
                                    Select::make('project_category_id')
                                        ->relationship('category', 'name')
                                        ->label('Categoria / Setor')
                                        ->required()
                                        ->searchable()
                                        ->preload()
                                        ->createOptionForm([
                                            TextInput::make('name')->required()->label('Nome da Categoria'),
                                        ]),
                                    Select::make('service_id')
                                        ->relationship('service', 'title')
                                        ->label('Serviço Vinculado (Opcional)')
                                        ->nullable()
                                        ->searchable()
                                        ->preload(),
                                ]),
                                ComponentsGrid::make(3)->schema([
                                    TextInput::make('name')
                                        ->label('Título do Projeto')
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn ($set, ?string $state) => $set('slug', Str::slug($state)))
                                        ->required(),
                                    TextInput::make('slug')
                                        ->label('Slug (URL)')
                                        ->disabled()
                                        ->dehydrated()
                                        ->required()
                                        ->unique(ignoreRecord: true),
                                    TextInput::make('client')
                                        ->label('Cliente')
                                        ->required(),
                                ]),
                                Textarea::make('description')
                                    ->label('Descrição Curta')
                                    ->required()
                                    ->columnSpanFull(),
                                ComponentsGrid::make(2)->schema([
                                    FileUpload::make('image')
                                        ->label('Imagem de Capa')
                                        ->image()
                                        ->disk('public')
                                        ->directory('storage')
                                        ->preserveFilenames()
                                        ->previewable(false),
                                    Textarea::make('caption')
                                        ->label('Legenda da Imagem')
                                        ->rows(2),
                                ]),
                                ComponentsGrid::make(2)->schema([
                                    Toggle::make('is_featured')
                                        ->label('Destacar como Card Principal (Hero)')
                                        ->default(false),
                                    TextInput::make('order')
                                        ->label('Ordem de Exibição')
                                        ->numeric()
                                        ->default(0),
                                ]),
                            ]),
                        TabsTab::make('Desafio & Solução')
                            ->schema([
                                Toggle::make('show_challenge')->label('Exibir Seção O Desafio')->default(true),
                                ComponentsGrid::make(2)->schema([
                                    TextInput::make('challenge_tag')->label('Tag do Desafio'),
                                    TextInput::make('challenge_title')->label('Título do Desafio'),
                                ]),
                                Textarea::make('challenge_description')->label('Descrição do Desafio')->columnSpanFull(),

                                Toggle::make('show_solution')->label('Exibir Seção A Solução')->default(true)->columnSpanFull(),
                                ComponentsGrid::make(2)->schema([
                                    TextInput::make('solution_tag')->label('Tag da Solução'),
                                    TextInput::make('solution_title')->label('Título da Solução'),
                                ]),
                                Textarea::make('solution_description')->label('Descrição da Solução')->columnSpanFull(),
                            ]),
                        TabsTab::make('Impacto & Tecnologias')
                            ->schema([
                                Toggle::make('show_impact')->label('Exibir Seção Impacto')->default(true),
                                ComponentsGrid::make(2)->schema([
                                    TextInput::make('impact_tag')->label('Tag do Impacto'),
                                    TextInput::make('impact_title')->label('Título do Impacto'),
                                ]),
                                Textarea::make('impact_description')->label('Descrição do Impacto')->columnSpanFull(),

                                TextInput::make('tech_tag')->label('Título da Seção de Tecnologias'),
                                TagsInput::make('tech_stack')
                                    ->label('Stack de Tecnologias')
                                    ->placeholder('Digite a tech e aperte Enter')
                                    ->columnSpanFull(),
                            ]),
                        TabsTab::make('Galeria & Rodapé')
                            ->schema([
                                Toggle::make('show_gallery')->label('Exibir Seção Galeria')->default(true),
                                ComponentsGrid::make(2)->schema([
                                    TextInput::make('gallery_tag')->label('Tag da Galeria'),
                                    TextInput::make('gallery_title')->label('Título da Galeria'),
                                ]),
                                Toggle::make('show_cta')->label('Exibir Call to Action (CTA Final)')->default(true),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
