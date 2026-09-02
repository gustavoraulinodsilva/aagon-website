<?php

namespace App\Filament\Pages;

use App\Models\ContactText as ModelsContactText;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ContactText extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string | UnitEnum | null $navigationGroup = 'Contato';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Contato - Textos';

    protected static ?string $title = 'Conteúdo da Página de Contato';
    
    protected static ?string $slug = 'contact-texts';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::DocumentText;

    protected string $view = 'filament.pages.contact-text';

    function mount(): void
    {
        $contacttext = ModelsContactText::first();

        if ($contacttext) {
            $this->data = $contacttext->toArray();
        } else {

            $this->data = [
                'hero_tag' => '',
                'hero_title' => '',
                'hero_description' => '',
                'service_tag' => '',
                'service_title' => '',
                'service_description' => '',
                'business_hours' => '',
                'availability' => '',
            ];
        }

        $this->form->fill($this->data);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Hero')
                    ->schema([
                        TextInput::make('hero_tag')
                            ->label('Tag do Hero')
                            ->required(),
                        RichEditor::make('hero_title')
                            ->label('Título do Hero')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['table', 'attachFiles'],
                                ['undo', 'redo'],
                            ])
                            ->required(),
                        Textarea::make('hero_description')
                            ->label('Descrição do Hero')
                            ->required(),
                    ]),
                Section::make('Serviço')
                    ->schema([
                        TextInput::make('service_tag')
                            ->label('Tag do Serviço')
                            ->required(),
                        TextInput::make('service_title')
                            ->label('Título do Serviço')
                            ->required(),
                        TextInput::make('service_description')
                            ->label('Descrição do Serviço')
                            ->required(),
                    ]),
                Section::make('Informações de Contato')
                    ->schema([
                        TextInput::make('business_hours')
                            ->label('Horário de Funcionamento')
                            ->required(),
                        TextInput::make('availability')
                            ->label('Disponibilidade')
                            ->required(),
                    ]),
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

        ModelsContactText::updateOrCreate(
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
