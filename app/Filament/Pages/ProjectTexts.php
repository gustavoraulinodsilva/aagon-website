<?php

namespace App\Filament\Pages;

use App\Models\ProjectTexts as ModelsProjectTexts;
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
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ProjectTexts extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string | UnitEnum | null $navigationGroup = 'Projetos';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Projetos - Textos';

    protected static ?string $title = 'Conteúdo da Página de Projetos';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::Home;

    protected static ?string $slug = 'project-texts';

    protected string $view = 'filament.pages.project-texts';

    public function mount(): void
    {
        $projecttext = ModelsProjectTexts::first();

        if ($projecttext) {
            $this->data = $projecttext->toArray();
        } else {

            $this->data = [
                'hero_tag' => '',
                'hero_title' => '',
                'hero_description' => '',
                'category_tag' => '',
                'show_cta' => true,
            ];
        }

        $this->form->fill($this->data);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->schema([
                TextInput::make('hero_tag')
                    ->label('Tag - Inicio')
                    ->required(),
                RichEditor::make('hero_title')
                    ->label('Título - Inicio')
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                        ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                        ['alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                        ['table', 'attachFiles'],
                        ['undo', 'redo'],
                    ])
                    ->required(),
                Textarea::make('hero_description')
                    ->label('Descrição - Inicio')
                    ->required(),
                TextInput::make('category_tag')
                    ->label('Tag da Categoria')
                    ->required(),
                Toggle::make('show_cta')
                    ->label('Exibir CTA')
                    ->default(true),
            ])
        ->statepath('data');
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

        ModelsProjectTexts::updateOrCreate(
            ['id' => 1],
            $data
        );

        $this->form->fill($data);

        Notification::make()
            ->success()
            ->title('Textos do Projeto atualizada')
            ->body('As alterações foram salvas com sucesso.')
            ->send();
    }
}
