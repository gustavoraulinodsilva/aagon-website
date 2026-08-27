<?php

namespace App\Filament\Pages;

use App\Models\AboutTexts as ModelsAboutTexts;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\RichEditor\ToolbarButtonGroup;
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

class AboutTexts extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string | UnitEnum | null $navigationGroup = 'Sobre a AAGON';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Sobre - Textos';

    protected static ?string $title = 'Conteúdo da Página Sobre';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::DocumentText;

    protected static ?string $slug = 'about-texts';

    protected string $view = 'filament.pages.about-texts';

    public function mount(): void
    {
        $about = ModelsAboutTexts::first();

        if ($about) {
            $this->data = $about->toArray();
        } else {

            $this->data = [
                'hero_tag' => '',
                'hero_title' => '',
                'hero_description' => '',
                'hero_image' => '',
                'hero_figcaption' => '',
                'philosophy_tag' => '',
                'philosophy_title' => '',
                'philosophy_description' => '',
                'manifest_text' => '',
                'approach_tag' => '',
                'approach_title' => '',
                'workflow_tag' => '',
                'workflow_title' => '',
                'values_tag' => '',
                'values_title' => '',
                'metrics_tag' => '',
                'metrics_title' => '',
                'show_philosophy' => true,
                'show_approach' => true,
                'show_workflow' => true,
                'show_values' => true,
                'show_metrics' => true
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
                        TextInput::make('hero_tag')
                                ->label('Tag')
                                ->required(),
                        RichEditor::make('hero_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                            ->label('Título')
                            ->required(),
                        Textarea::make('hero_description')
                            ->label('Descrição')
                            ->rows(3)
                            ->required(),
                        FileUpload::make('hero_image')
                            ->label('Imagem')
                            ->image()
                            ->disk('public')
                            ->directory('storage')
                            ->maxSize(5120)
                            ->preserveFilenames()
                            ->required(),
                        TextInput::make('hero_figcaption')
                            ->label('Legenda da imagem')
                    ]),
                Section::make('Filosofia')
                    ->description('Conteúdo da seção Filosofia.')
                    ->schema([
                        Toggle::make('show_philosophy')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Filosofia')
                            ->required(),
                        TextInput::make('philosophy_tag')
                            ->label('Tag')
                            ->required(),
                        RichEditor::make('philosophy_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                            ->label('Título')
                            ->required(),
                        Textarea::make('philosophy_description')
                            ->label('Descrição')
                            ->rows(3)
                            ->required(),
                        TextInput::make('manifest_tag')
                            ->label('Tag do Manifesto')
                            ->required(),
                        RichEditor::make('manifest_text')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                            ->label('Texto do Manifesto')
                            ->required(),
                    ]),
                Section::make('Abordagem')
                    ->description('Conteúdo da seção Abordagem.')
                    ->schema([
                        Toggle::make('show_approach')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Abordagem')
                            ->required(),
                        TextInput::make('approach_tag')
                            ->label('Tag')
                            ->required(),
                        RichEditor::make('approach_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                            ->label('Título')
                            ->required(),
                    ]),
                Section::make('Fluxo de Trabalho')
                    ->description('Conteúdo da seção Fluxo de Trabalho.')
                    ->schema([
                        Toggle::make('show_workflow')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Fluxo de Trabalho')
                            ->required(),
                        TextInput::make('workflow_tag')
                            ->label('Tag')
                            ->required(),
                        RichEditor::make('workflow_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                            ->label('Título')
                            ->required(),
                    ]),
                Section::make('Valores')
                    ->description('Conteúdo da seção Valores.')
                    ->schema([
                        Toggle::make('show_values')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Valores')
                            ->required(),
                        TextInput::make('values_tag')
                            ->label('Tag')
                            ->required(),
                        RichEditor::make('values_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                            ->label('Título')
                            ->required(),
                    ]),
                Section::make('Métricas')
                    ->description('Conteúdo da seção Métricas.')
                    ->schema([
                        Toggle::make('show_metrics')
                            ->onColor('success')
                            ->offColor('danger')
                            ->label('Exibir seção Métricas')
                            ->required(),
                        TextInput::make('metrics_tag')
                            ->label('Tag')
                            ->required(),
                        RichEditor::make('metrics_title')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                            ->label('Título')
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

        ModelsAboutTexts::updateOrCreate(
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
