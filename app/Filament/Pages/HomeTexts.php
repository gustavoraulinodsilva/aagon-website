<?php

namespace App\Filament\Pages;

use App\Models\HomeTexts as HomeTextModel;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class HomeTexts extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string | UnitEnum | null $navigationGroup = 'Página Inicial';
    
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Home - Textos';

    protected static ?string $title = 'Conteúdo da Home';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::Home;

    protected static ?string $slug = 'home';

    protected string $view = 'filament.pages.home-texts';

    public function mount(): void
    {
        $home = HomeTextModel::first();

        if ($home) {
            $this->data = $home->toArray();
        } else {
            $this->data = [
                'hero_background' => '',
                'hero_eyebrow' => '',
                'hero_title' => '',
                'hero_description' => '',
                'hero_primary_label' => '',
                'hero_primary_link' => '',
                'hero_secondary_label' => '',
                'hero_secondary_link' => '',

                'philosophy_text' => '',

                'methodology_label' => '',
                'methodology_title' => '',
                'methodology_description' => '',

                'services_label' => '',
                'services_title' => '',
                'services_link_label' => '',
                'services_link_url' => '',

                'about_label' => '',
                'about_title' => '',
                'about_description' => '',

                'show_philosophy' => true,
                'show_methodology' => true,
                'show_services' => true,
                'show_about' => true,
                'show_cta' => true,
            ];
        }

        $this->form->fill($this->data);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero')
                    ->description('Conteúdo principal da página inicial.')
                    ->schema([
                        FileUpload::make('hero_background')
                            ->label('Background')
                            ->disk('public')
                            ->directory('storage')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                                'video/mp4',
                                'video/webm',
                                'video/quicktime',
                            ])
                            ->mimeTypeMap([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                                'video/mp4',
                                'video/webm',
                                'video/quicktime',
                            ])
                            ->maxSize(12288)
                            ->preserveFilenames()
                            ->previewable(false)
                            ->required(),

                        TextInput::make('hero_eyebrow')
                            ->label('Eyebrow')
                            ->required(),

                        RichEditor::make('hero_title')
                            ->label('Título')
                            ->required(),

                        Textarea::make('hero_description')
                            ->label('Descrição')
                            ->required(),

                        Grid::make()
                        ->schema([
                            TextInput::make('hero_primary_label')
                            ->label('Botão primário'),

                            TextInput::make('hero_primary_link')
                            ->label('Link do botão primário'),

                            TextInput::make('hero_secondary_label')
                            ->label('Botão secundário'),

                            TextInput::make('hero_secondary_link')
                            ->label('Link do botão secundário'),
                        ])
                    ]),

                Section::make('Filosofia da Empresa')
                    ->schema([
                        RichEditor::make('philosophy_text')
                            ->label('Texto')
                            ->required(),
                    ]),

                Section::make('Metodologia')
                    ->schema([
                        TextInput::make('methodology_label')
                            ->label('Label')
                            ->required(),

                        TextInput::make('methodology_title')
                            ->label('Título')
                            ->required(),

                        Textarea::make('methodology_description')
                            ->label('Descrição')
                            ->required(),
                    ]),

                Section::make('Serviços')
                    ->schema([
                        Grid::make()
                        ->schema([
                            TextInput::make('services_label')
                            ->label('Label')
                            ->required(),

                            TextInput::make('services_title')
                            ->label('Título')
                            ->required(),

                            TextInput::make('services_link_label')
                            ->label('Texto do link'),

                            TextInput::make('services_link_url')
                            ->label('URL'),
                        ])
                    ]),

                Section::make('Sobre a AAGON')
                    ->schema([
                        TextInput::make('about_label')
                            ->label('Label')
                            ->required(),

                        TextInput::make('about_title')
                            ->label('Título')
                            ->required(),

                        Textarea::make('about_description')
                            ->label('Descrição')
                            ->required(),
                    ]),

                Section::make('Visibilidade')
                    ->schema([
                        Grid::make()
                            ->schema([
                                Toggle::make('show_philosophy')
                                    ->label('Exibir Filosofia da Empresa')
                                    ->default(true),

                                Toggle::make('show_methodology')
                                    ->label('Exibir Metodologia')
                                    ->default(true),

                                Toggle::make('show_services')
                                    ->label('Exibir Serviços')
                                    ->default(true),

                                Toggle::make('show_about')
                                    ->label('Exibir Sobre a AAGON')
                                    ->default(true),

                                Toggle::make('show_cta')
                                    ->label('Exibir CTA')
                                    ->default(true),
                            ])
                            ->columns(2),
                    ]),
            ])
            ->statePath('data');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Salvar alterações')
                ->action('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        HomeTextModel::updateOrCreate(
            ['id' => 1],
            $data
        );

        $this->form->fill($data);

        Notification::make()
            ->success()
            ->title('Home atualizada')
            ->body('As alterações foram salvas com sucesso.')
            ->send();
    }
}
