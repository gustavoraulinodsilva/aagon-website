<?php

namespace App\Filament\Pages;

use App\Models\General as ModelsGeneral;
use BackedEnum;
use Filament\Actions\Action;
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

class General extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string | UnitEnum | null $navigationGroup = 'Configurações';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Gerais';

    protected static ?string $title = 'Conteúdo Geral do Site';

    protected static string | BackedEnum | null $navigationIcon = Heroicon::ArchiveBox;

    protected static ?string $slug = 'general';

    protected string $view = 'filament.pages.general';

    public function mount(): void
    {
        $general = ModelsGeneral::first();

        if($general){
            $this->data = $general->toArray();
        } else {

            $this->data = [
                'email' => '',
                'location' => '',
                'linkedin' => '',
                'instagram' => '',
                'facebook' => '',
                'twitter' => '',
                'slogan' => '',
                'privacy_policy_link' => '',
                'terms_of_service_link' => '',
                'cookie_policy_link' => '',
                'cta_tag' => '',
                'cta_title' => '',
                'cta_description' => '',
                'cta_btn_label' => '',
                'cta_btn_link' => ''
            ];
        }

        $this->form->fill($this->data);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Informações Gerais')
                    ->schema([
                        TextInput::make('email')
                            ->label('Email de Contato')
                            ->email()
                            ->required(),
                        TextInput::make('location')
                            ->label('Localização da Empresa')
                            ->required(),
                        TextInput::make('linkedin')
                            ->label('Link do LinkedIn'),
                        TextInput::make('instagram')
                            ->label('Link do Instagram'),
                        TextInput::make('facebook')
                            ->label('Link do Facebook'),
                        TextInput::make('twitter')
                            ->label('Link do Twitter'),
                        TextInput::make('slogan')
                            ->label('Slogan da Empresa'),
                    ])
                    ->columns(2),
                Section::make('Políticas e Termos')
                    ->schema([
                        TextInput::make('privacy_policy_link')
                            ->label('Link da Política de Privacidade'),
                        TextInput::make('terms_of_service_link')
                            ->label('Link dos Termos de Serviço'),
                        TextInput::make('cookie_policy_link')
                            ->label('Link da Política de Cookies'),
                    ])
                    ->columns(2),
                Section::make('Call to Action (CTA)')
                    ->schema([
                        TextInput::make('cta_tag')
                            ->label('Tag do CTA'),
                        TextInput::make('cta_title')
                            ->label('Título do CTA'),
                        Textarea::make('cta_description')
                            ->label('Descrição do CTA'),
                        TextInput::make('cta_btn_label')
                            ->label('Texto do Botão do CTA'),
                        TextInput::make('cta_btn_link')
                            ->label('Link do Botão do CTA'),
                    ])
                    ->columns(2),
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

        ModelsGeneral::updateOrCreate(
            ['id' => 1],
            $data
        );

        $this->form->fill($data);

        Notification::make()
            ->success()
            ->title('Informações atualizadas')
            ->body('As alterações foram salvas com sucesso.')
            ->send();
    }
}
