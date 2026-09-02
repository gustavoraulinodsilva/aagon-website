<?php

namespace App\Filament\Pages;

use App\Models\TeamTexts as ModelsTeamTexts;
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

class TeamTexts extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string | UnitEnum | null $navigationGroup = 'Time';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Time - Textos';

    protected static ?string $title = 'Conteúdo da Página de Equipe';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::DocumentText;

    protected static ?string $slug = 'team-texts';
    
    protected string $view = 'filament.pages.team-texts';

    public function mount(): void
    {
        $teamtext = ModelsTeamTexts::first();

        if ($teamtext) {
            $this->data = $teamtext->toArray();
        } else {

            $this->data = [
                'hero_tag' => '',
                'hero_title' => '',
                'hero_description' => '',
                'essence_tag' => '',
                'essence_title' => '',
                'essence_description' => '',
                'team_tag' => '',
                'team_title' => '',
                'philosophy_tag' => '',
                'philosophy_text' => '',
                'show_essence' => true,
                'show_team' => true,
                'show_philosophy' => true,
                'show_cta' => true,
            ];
        }

        $this->form->fill($this->data);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Seção Inicial')
                    ->description('Conteúdo principal da página inicial.')
                    ->schema([
                        TextInput::make('hero_tag')
                            ->label('Tag da Seção Inicial')
                            ->required(),
                        RichEditor::make('hero_title')
                            ->label('Título da Seção Inicial')
                                ->toolbarButtons([
                                    ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                    ['h1','h2', 'h3', 'h4', 'h5', 'h6'],
                                    ['alignStart', 'alignCenter', 'alignEnd'],
                                    ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                    ['table', 'attachFiles'],
                                    ['undo', 'redo'],
                                ])
                            ->required(),
                        TextArea::make('hero_description')
                            ->label('Descrição da Seção Inicial')
                            ->required(),
                    ]),
                Section::make('Seção Essência')
                    ->description('Conteúdo da seção de essência.')
                    ->schema([
                        TextInput::make('essence_tag')
                            ->label('Tag da Seção Essência')
                            ->required(),
                        TextInput::make('essence_title')
                            ->label('Título da Seção Essência')
                            ->required(),
                        TextArea::make('essence_description')
                            ->label('Descrição da Seção Essência')
                            ->required(),
                        Toggle::make('show_essence')
                            ->label('Exibir Seção Essência')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true),
                    ]),
                Section::make('Seção Equipe')
                    ->description('Conteúdo da seção de equipe.')
                    ->schema([
                        TextInput::make('team_tag')
                            ->label('Tag da Seção Equipe')
                            ->required(),
                        TextInput::make('team_title')
                            ->label('Título da Seção Equipe')
                            ->required(),
                        Toggle::make('show_team')
                            ->label('Exibir Seção Equipe')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true),
                    ]),
                Section::make('Seção Filosofia')
                    ->description('Conteúdo da seção de filosofia.')
                    ->schema([
                        TextInput::make('philosophy_tag')
                            ->label('Tag da Seção Filosofia')
                            ->required(),
                        TextArea::make('philosophy_text')
                            ->label('Texto da Seção Filosofia')
                            ->required(),
                        Toggle::make('show_philosophy')
                            ->label('Exibir Seção Filosofia')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true),
                    ]),
                Section::make('Seção CTA')
                    ->description('Conteúdo da seção de Call to Action.')
                    ->schema([
                        Toggle::make('show_cta')
                            ->label('Exibir Seção CTA')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true),
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

        ModelsTeamTexts::updateOrCreate(
            ['id' => 1],
            $data
        );

        $this->form->fill($data);

        Notification::make()
            ->success()
            ->title('Time atualizado')
            ->body('As alterações foram salvas com sucesso.')
            ->send();
    }
}
