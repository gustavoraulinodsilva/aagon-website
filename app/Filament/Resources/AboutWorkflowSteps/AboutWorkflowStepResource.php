<?php

namespace App\Filament\Resources\AboutWorkflowSteps;

use App\Filament\Resources\AboutWorkflowSteps\Pages\CreateAboutWorkflowStep;
use App\Filament\Resources\AboutWorkflowSteps\Pages\EditAboutWorkflowStep;
use App\Filament\Resources\AboutWorkflowSteps\Pages\ListAboutWorkflowSteps;
use App\Filament\Resources\AboutWorkflowSteps\Pages\ViewAboutWorkflowStep;
use App\Filament\Resources\AboutWorkflowSteps\Schemas\AboutWorkflowStepForm;
use App\Filament\Resources\AboutWorkflowSteps\Schemas\AboutWorkflowStepInfolist;
use App\Filament\Resources\AboutWorkflowSteps\Tables\AboutWorkflowStepsTable;
use App\Models\AboutWorkflowStep;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutWorkflowStepResource extends Resource
{
    protected static ?string $model = AboutWorkflowStep::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQueueList;

    protected static string | UnitEnum| null $navigationGroup = 'Sobre a AAGON';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Sobre - Processo de Trabalho';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return AboutWorkflowStepForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AboutWorkflowStepInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutWorkflowStepsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutWorkflowSteps::route('/'),
            'create' => CreateAboutWorkflowStep::route('/create'),
            'view' => ViewAboutWorkflowStep::route('/{record}'),
            'edit' => EditAboutWorkflowStep::route('/{record}/edit'),
        ];
    }
}
