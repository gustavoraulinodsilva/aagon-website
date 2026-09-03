# Aagon

Site institucional completo para a Aagon, uma empresa fictícia de tecnologia e engenharia digital que desenvolve soluções digitais sob medida para empresas.

O projeto foi construído para funcionar como uma aplicação administrável, e não apenas como uma landing page estática. Ele é dividido em duas áreas:

```text
Aagon
├── Website público
└── Painel administrativo
    └── Filament
```

## Visão geral

O website público apresenta a empresa, seus serviços, projetos, equipe e canais de contato. O conteúdo é carregado do banco de dados e pode ser atualizado pelo painel administrativo sem editar os templates Blade.

Principais recursos:

- Página inicial com hero, vídeo ou imagem de fundo, metodologia, serviços, métricas e CTA.
- Página institucional Sobre a Aagon com abordagem, fluxo de trabalho, valores e métricas.
- Catálogo de serviços e páginas individuais para cada serviço.
- Catálogo de projetos com categorias e páginas individuais.
- Página de equipe com perfil, cargo, biografia, LinkedIn e imagem.
- Página de contato com formulário persistido no banco de dados.
- Conteúdo global para cabeçalho, rodapé, redes sociais, políticas e CTA.
- Painel Filament para gerenciar textos, mídia, registros, relacionamentos e mensagens recebidas.
- Layout responsivo para desktop e mobile.
- Menu mobile com controle de foco, `inert`, `aria-expanded` e fechamento por tecla `Escape`.
- Animações de entrada acionadas por `IntersectionObserver`, respeitando `prefers-reduced-motion`.

## Stack

- PHP 8.3+
- Laravel 13
- Blade
- Vite 8
- Tailwind CSS 4
- Filament 5
- PostgreSQL, como banco recomendado para o projeto
- Composer
- Node.js e npm

As páginas públicas não utilizam React, Vue, Livewire ou starter kit externo. O frontend é renderizado com Blade e estilizado com Tailwind CSS. O Filament é utilizado exclusivamente para o painel administrativo e pode trazer suas próprias dependências internas.

## Requisitos

- PHP `^8.3`
- Composer
- Node.js e npm
- PostgreSQL instalado e acessível, ou outro banco compatível com Laravel
- Extensões PHP normalmente exigidas pelo Laravel e pelo Filament

## Instalação

Clone o projeto e entre na pasta:

```bash
git clone <url-do-repositorio>
cd aagon-website
```

Instale as dependências PHP e JavaScript:

```bash
composer install
npm install
```

Crie o arquivo de ambiente e gere a chave da aplicação:

```bash
copy .env.example .env
php artisan key:generate
```

No Linux ou macOS, use:

```bash
cp .env.example .env
```

Configure o banco no `.env`. Para PostgreSQL:

```dotenv
APP_NAME=Aagon
APP_URL=http://localhost:8000

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=aagon
DB_USERNAME=postgres
DB_PASSWORD=sua_senha
```

O `.env.example` original está preparado para SQLite por padrão. Para usar SQLite, crie o arquivo de banco e mantenha `DB_CONNECTION=sqlite`:

```bash
type nul > database\database.sqlite
```

Execute as migrations:

```bash
php artisan migrate
```

Crie o link para os arquivos públicos enviados pelo painel:

```bash
php artisan storage:link
```

Compile os assets:

```bash
npm run build
```

Opcionalmente, o script completo de preparação também está disponível:

```bash
composer run setup
```

Esse script instala dependências, cria o `.env`, gera a chave, executa migrations, instala dependências JavaScript e gera o build de produção.

## Desenvolvimento

Para iniciar o ambiente de desenvolvimento do Laravel:

```bash
composer run dev
```

Também é possível iniciar o Vite separadamente:

```bash
npm run dev
```

Para executar somente a aplicação Laravel:

```bash
php artisan serve
```

O website ficará disponível em `http://localhost:8000` e o painel administrativo em `http://localhost:8000/admin`.

## Website público

Todas as páginas utilizam o layout [resources/views/layout/master.blade.php](resources/views/layout/master.blade.php), que carrega os assets do Vite e inclui o cabeçalho e o rodapé compartilhados.

### Rotas e páginas

| Rota | Nome | Controller | Função |
| --- | --- | --- | --- |
| `/` | `home` | `HomeController@index` | Hero, metodologia, serviços, métricas e CTA |
| `/sobre-nos` | `about` | `AboutController@index` | História, abordagem, workflow, valores e métricas |
| `/servicos` | `services` | `ServicesController@index` | Catálogo de serviços e ciclo de trabalho |
| `/servicos/{slug}` | `services.details` | `ServicesDetailsController@index` | Detalhes de um serviço ativo |
| `/projetos` | `projects` | `ProjectsController@index` | Projetos e filtros por categoria |
| `/projetos/{slug}` | `projects.details` | `ProjectsDetailsController@index` | Detalhes, métricas e galeria de um projeto |
| `/equipe` | `team` | `TeamController@index` | Membros da equipe |
| `/contato` | `contact` | `ContactController@index` | Informações e formulário de contato |
| `POST /contato` | `contact.store` | `ContactController@store` | Validação e armazenamento da mensagem |

As páginas de detalhes usam `firstOrFail()` e retornam `404` quando o slug não é encontrado. O detalhe de serviço considera apenas serviços ativos.

### Formulário de contato

O endpoint `POST /contato` valida:

- `name`: obrigatório, texto, até 255 caracteres.
- `email`: obrigatório, e-mail válido, até 255 caracteres.
- `phone`: opcional, até 20 caracteres.
- `company`: opcional, até 255 caracteres.
- `subject`: obrigatório, até 255 caracteres.
- `message`: obrigatório.

Após a validação, a mensagem é salva em `contacts` e a resposta de sucesso é retornada em JSON. As mensagens podem ser consultadas pelo painel Filament.

### Views e componentes

- [resources/views/home.blade.php](resources/views/home.blade.php): página inicial.
- [resources/views/pages/about.blade.php](resources/views/pages/about.blade.php): Sobre a Aagon.
- [resources/views/pages/services.blade.php](resources/views/pages/services.blade.php): listagem de serviços.
- [resources/views/pages/services-details.blade.php](resources/views/pages/services-details.blade.php): detalhe de serviço.
- [resources/views/pages/projects.blade.php](resources/views/pages/projects.blade.php): listagem de projetos.
- [resources/views/pages/projects-details.blade.php](resources/views/pages/projects-details.blade.php): detalhe de projeto.
- [resources/views/pages/team.blade.php](resources/views/pages/team.blade.php): equipe.
- [resources/views/pages/contact.blade.php](resources/views/pages/contact.blade.php): contato.
- [resources/views/partials/header.blade.php](resources/views/partials/header.blade.php): navegação, menu mobile e link de contato.
- [resources/views/partials/footer.blade.php](resources/views/partials/footer.blade.php): navegação, contato, redes sociais e políticas.
- [resources/views/components/cta.blade.php](resources/views/components/cta.blade.php): CTA reutilizável com fundo configurável por página.

## Conteúdo administrável

O conteúdo editorial é separado dos registros relacionais. As páginas Filament de texto funcionam como configurações singleton, atualizando o registro de ID `1` com `updateOrCreate`.

### Conteúdo geral

Gerenciado em **Configurações > Gerais**:

- E-mail e localização.
- Slogan.
- LinkedIn, Instagram, Facebook e Twitter.
- Links de política de privacidade, termos de serviço e cookies.
- Tag, título, descrição, label e link do CTA global.

O model `General` é carregado pelo controller base e compartilhado com todas as views como `$general`.

### Página inicial

Gerenciada em **Página Inicial**:

- Imagem ou vídeo do hero.
- Eyebrow, título e descrição.
- Links e labels dos botões principal e secundário.
- Texto da filosofia.
- Textos de metodologia, serviços e sobre.
- Flags para exibir ou ocultar seções.
- Etapas da metodologia, com número, título, descrição, ordem e status ativo.

### Sobre a Aagon

Gerenciada em **Sobre a AAGON**:

- Textos e mídia do hero.
- Filosofia e manifesto.
- Textos de abordagem, workflow, valores e métricas.
- Visibilidade das seções.
- Registros de abordagens, etapas do workflow, valores e métricas.

### Serviços

Gerenciada em **Serviços**:

- Textos da página de listagem.
- Etapas gerais do ciclo de vida.
- Serviços com título, slug, descrição, desafio, entregáveis e tecnologia.
- Capacidades e etapas de metodologia relacionadas a cada serviço.
- Ordenação, status ativo e flags de exibição das seções do detalhe.

### Projetos

Gerenciada em **Projetos**:

- Textos introdutórios e visibilidade do CTA.
- Categorias.
- Projetos relacionados a uma categoria e, opcionalmente, a um serviço.
- Cliente, slug, imagem e conteúdo de desafio, solução e impacto.
- Tecnologias, ordem e flags das seções.
- Métricas e galeria relacionadas a cada projeto.

### Equipe

Gerenciada em **Time**:

- Textos da página, essência, equipe e filosofia.
- Flags de exibição das seções.
- Nome, cargo, biografia, LinkedIn, imagem, número e ordem de cada membro.

### Contato

Gerenciada em **Contato**:

- Textos do hero e da apresentação de contato.
- Horário de atendimento.
- Disponibilidade.
- Mensagens enviadas pelo formulário público.

## Painel administrativo

O painel é fornecido pelo Filament e está configurado em [app/Providers/Filament/AdminPanelProvider.php](app/Providers/Filament/AdminPanelProvider.php).

- URL: `/admin`
- Login habilitado.
- Autenticação por sessão usando o model `User`.
- Cor primária: azul.
- Dashboard padrão com widgets de conta e informações do Filament.
- Descoberta automática de Pages, Resources e Widgets dentro de `app/Filament`.
- Navegação agrupada por página, conteúdo e configuração.

### Pages Filament

As Pages abaixo editam conteúdo singleton por meio de formulários personalizados:

- [HomeTexts.php](app/Filament/Pages/HomeTexts.php): conteúdo da home.
- [AboutTexts.php](app/Filament/Pages/AboutTexts.php): conteúdo da página Sobre.
- [ServiceTexts.php](app/Filament/Pages/ServiceTexts.php): conteúdo da página Serviços.
- [ProjectTexts.php](app/Filament/Pages/ProjectTexts.php): conteúdo da página Projetos.
- [TeamTexts.php](app/Filament/Pages/TeamTexts.php): conteúdo da página Time.
- [ContactText.php](app/Filament/Pages/ContactText.php): conteúdo da página Contato.
- [General.php](app/Filament/Pages/General.php): configurações gerais e CTA.

### Resources Filament

Os Resources fornecem telas de listagem, criação e edição conforme a entidade:

- `HomeMethodologyStepResource`: etapas da metodologia da home.
- `AboutApproachResource`: abordagens da Aagon.
- `AboutWorkflowStepResource`: etapas do workflow.
- `AboutValueResource`: valores.
- `AboutMetricResource`: métricas da página Sobre.
- `ServiceResource`: serviços.
- `ServiceLifecycleStepResource`: etapas gerais do ciclo de serviço.
- `ProjectCategoryResource`: categorias de projetos.
- `ProjectResource`: projetos.
- `TeamResource`: membros do time.
- `ContactResource`: mensagens recebidas.
- `UserResource`: usuários do painel.

Relacionamentos gerenciados dentro dos Resources:

- Serviço → capacidades e etapas de metodologia.
- Projeto → métricas e itens da galeria.

Os schemas de formulário e tabelas ficam organizados nos subdiretórios `Schemas` e `Tables` de cada Resource.

## Controllers

- `Controller`: carrega o primeiro registro de `General` e o compartilha com as views.
- `HomeController`: reúne textos da home, etapas de metodologia, serviços e até três métricas.
- `AboutController`: reúne textos, abordagens, workflow, valores e métricas ativos.
- `ServicesController`: reúne textos, etapas ativas do ciclo e serviços.
- `ServicesDetailsController`: busca um serviço ativo por slug e carrega capacidades, metodologia e projetos.
- `ProjectsController`: reúne textos, categorias e projetos com suas categorias.
- `ProjectsDetailsController`: busca um projeto por slug com categoria, serviço, métricas e galeria.
- `TeamController`: reúne textos e membros ordenados.
- `ContactController`: exibe a página de contato e persiste mensagens validadas.

## Models e relacionamentos

### Conteúdo singleton

`HomeTexts`, `AboutTexts`, `ServiceTexts`, `ProjectTexts`, `TeamTexts`, `ContactText` e `General` guardam textos e configurações editáveis das páginas.

### Conteúdo estruturado

- `HomeMethodologyStep`: etapas da metodologia da home.
- `AboutApproach`, `AboutWorkflowStep`, `AboutValue`, `AboutMetric`: conteúdo estruturado da página Sobre.
- `ServiceLifecycleStep`: etapas gerais do ciclo dos serviços.
- `ServiceCapabilities` e `ServiceMethodologyStep`: conteúdo relacionado a um serviço.
- `ProjectCategory`: categorias dos projetos.
- `ProjectMetric` e `ProjectGallery`: métricas e imagens relacionadas a projetos.
- `Team`: membros da equipe.
- `Contact`: mensagens do formulário.
- `User`: usuários autenticados do painel.

Relacionamentos principais:

```text
Service
├── hasMany ServiceCapabilities
├── hasMany ServiceMethodologyStep
└── hasMany Project

Project
├── belongsTo ProjectCategory
├── belongsTo Service
├── hasMany ProjectMetric
└── hasMany ProjectGallery
```

Os campos de lista `deliverables`, `tech_stack` e `tech_tags` são armazenados como arrays via casts dos models. Registros filhos relacionados a serviços e projetos possuem exclusão em cascata quando configurada pelas migrations.

## Banco de dados e migrations

Além das tabelas padrão do Laravel para usuários, cache e filas, as migrations criam as tabelas de conteúdo da home, Sobre, serviços, projetos, equipe, contato e configurações gerais.

As migrations de conteúdo incluem:

- Textos e etapas da home.
- Textos, abordagens, workflow, valores e métricas da página Sobre.
- Textos, ciclo de vida, serviços, capacidades e metodologia.
- Textos, categorias, projetos, métricas e galerias.
- Textos e membros da equipe.
- Textos de contato e mensagens recebidas.
- Configurações gerais do site.

Para consultar o estado atual do banco:

```bash
php artisan migrate:status
```

O `DatabaseSeeder` atual cria somente um usuário de teste:

```text
Nome: Test User
E-mail: test@example.com
```

Não existem seeders de conteúdo, serviços, projetos, equipe ou configurações gerais. Depois das migrations, é necessário preencher o painel administrativo para que todas as áreas públicas tenham conteúdo.

## Assets e frontend

O Vite está configurado em [vite.config.js](vite.config.js) com dois pontos de entrada:

- `resources/css/app.css`
- `resources/js/app.js`

O CSS importa Tailwind CSS 4, define as fontes `Instrument Sans` e `JetBrains Mono` e centraliza cores e estilos globais básicos.

O JavaScript público:

- Inicializa scripts específicos de home, Sobre, projetos e contato.
- Controla o estado do cabeçalho durante o scroll.
- Abre e fecha o menu mobile.
- Fecha o menu com overlay, botão de fechar, tecla `Escape` ou mudança para viewport desktop.
- Executa animações de revelação com `IntersectionObserver`.
- Desativa a animação quando o usuário prefere movimento reduzido ou quando o navegador não suporta `IntersectionObserver`.

Imagens e vídeos enviados pelo painel usam o disco público do Laravel. Em desenvolvimento, mantenha o link criado por `php artisan storage:link`.

## Testes

Execute a suíte com:

```bash
composer test
```

Ou diretamente:

```bash
php artisan test
```

Os testes existentes são testes iniciais do projeto:

- Teste de feature que verifica resposta HTTP `200` para `/`.
- Teste unitário que verifica uma asserção booleana.

Ainda não há cobertura específica para autenticação do painel, CRUDs Filament, filtros de conteúdo, páginas de detalhe ou envio do formulário de contato.

## Estrutura principal

```text
app/
├── Filament/
│   ├── Pages/                 # Formulários de conteúdo singleton
│   └── Resources/             # CRUDs e relacionamentos do painel
├── Http/Controllers/          # Controllers do website público
├── Models/                    # Models Eloquent e relacionamentos
└── Providers/Filament/        # Configuração do painel Filament

database/
├── factories/
├── migrations/
└── seeders/

resources/
├── css/                       # Tailwind e estilos globais
├── js/                        # Interações e animações do frontend
└── views/
    ├── components/            # Componentes Blade reutilizáveis
    ├── filament/              # Views auxiliares do painel
    ├── layout/                # Layout principal
    ├── pages/                 # Páginas públicas internas
    └── partials/              # Header e footer

routes/
├── console.php
└── web.php
```

## Comandos úteis

```bash
php artisan serve              # Servidor local
php artisan migrate            # Executar migrations
php artisan migrate:fresh     # Recriar o banco em desenvolvimento
php artisan db:seed            # Executar o DatabaseSeeder
php artisan storage:link       # Publicar uploads
php artisan view:cache         # Compilar views Blade
php artisan view:clear         # Limpar views compiladas
npm run dev                    # Vite em desenvolvimento
npm run build                  # Build de produção
composer test                  # Testes automatizados
```

## Publicação

Antes de publicar:

1. Configure `APP_ENV=production`, `APP_DEBUG=false` e `APP_URL` com o domínio real.
2. Configure o PostgreSQL e execute `php artisan migrate --force`.
3. Instale dependências sem pacotes de desenvolvimento quando apropriado.
4. Execute `npm run build`.
5. Execute `php artisan storage:link`.
6. Garanta que o servidor web aponte para a pasta `public`.
7. Configure corretamente permissões de `storage` e `bootstrap/cache`.
8. Crie um usuário administrativo e preencha os conteúdos pelo `/admin`.
9. Configure envio de e-mail e filas caso esses recursos sejam adicionados ao fluxo de produção.

## Licença

Este projeto foi criado como uma aplicação institucional fictícia para a Aagon. A licença e as regras de distribuição devem ser definidas conforme o repositório de publicação.
