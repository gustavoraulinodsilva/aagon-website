<?php

namespace App\Filament\Pages;

use App\Models\ServiceTexts as ModelsServiceTexts;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ServiceTexts extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string | UnitEnum | null $navigationGroup = 'Serviços';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Serviços - Textos';

    protected static ?string $title = 'Conteúdo da Página de Serviços';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::DocumentText;

    protected static ?string $slug = 'service-texts';
    
    protected string $view = 'filament.pages.service-texts';

    public function mount(): void
    {
        $service = ModelsServiceTexts::first();

        if ($service) {
            $this->data = $service->toArray();
        } else {
            $this->data = [
                'hero_tag' => '',
                'hero_title_highlight' => '',
                'hero_description' => '',
                'philosophy_tag' => '',
                'philosophy_title' => '',
                'philosophy_description' => '',
                'catalog_tag' => '',
                'catalog_title' => '',
                'lifecycle_tag' => '',
                'lifecycle_title' => '',
                'cta_tag' => '',
                'cta_title' => '',
                'cta_description' => '',
                'cta_button_text' => '',
                'show_philosophy' => true,
                'show_catalog' => true,
                'show_lifecycle' => true,
                'show_cta' => true,
            ];
        }
        
        $this->form->fill($this->data);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero (Topo)')
                    ->description('Conteúdo principal da página de serviços.')
                    ->schema([
                        TextInput::make('hero_tag')
                            ->label('Tag')
                            ->required(),
                        RichEditor::make('hero_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                ['h1','h2', 'h3'],
                                ['alignStart', 'alignCenter', 'alignEnd'],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['table', 'attachFiles'],
                                ['undo', 'redo'],
                            ])
                            ->label('Título')
                            ->required(),
                        Textarea::make('hero_description')
                            ->label('Descrição')
                            ->rows(3)
                            ->required(),
                    ]),

                Section::make('Filosofia de Engenharia')
                    ->description('Configurações e textos da seção de filosofia.')
                    ->schema([
                        Toggle::make('show_philosophy')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Filosofia')
                            ->required(),
                        TextInput::make('philosophy_tag')
                            ->label('Tag')
                            ->required(),
                        TextInput::make('philosophy_title')
                            ->label('Título')
                            ->required(),
                        Textarea::make('philosophy_description')
                            ->label('Descrição')
                            ->rows(3)
                            ->required(),
                    ]),

                Section::make('Catálogo de Soluções')
                    ->description('Textos introdutórios do catálogo.')
                    ->schema([
                        Toggle::make('show_catalog')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Catálogo')
                            ->required(),
                        TextInput::make('catalog_tag')
                            ->label('Tag')
                            ->required(),
                        TextInput::make('catalog_title')
                            ->label('Título')
                            ->required(),
                    ]),

                Section::make('Metodologia / Ciclo')
                    ->description('Textos da seção de ciclo de desenvolvimento.')
                    ->schema([
                        Toggle::make('show_lifecycle')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Metodologia')
                            ->required(),
                        TextInput::make('lifecycle_tag')
                            ->label('Tag')
                            ->required(),
                        TextInput::make('lifecycle_title')
                            ->label('Título')
                            ->required(),
                    ]),

                Section::make('Call to Action (CTA Final)')
                    ->description('Bloco de chamada para contato no final da página.')
                    ->schema([
                        Toggle::make('show_cta')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Call to Action')
                            ->required(),
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

        ModelsServiceTexts::updateOrCreate(
            ['id' => 1],
            $data
        );

        $this->form->fill($data);

        Notification::make()
            ->success()
            ->title('Página de Serviços atualizada')
            ->body('As alterações foram salvas com sucesso.')
            ->send();
    }
}
