<?php

namespace App\Filament\Resources\ServiceLifecycleSteps;

use App\Filament\Resources\ServiceLifecycleSteps\Pages\CreateServiceLifecycleStep;
use App\Filament\Resources\ServiceLifecycleSteps\Pages\EditServiceLifecycleStep;
use App\Filament\Resources\ServiceLifecycleSteps\Pages\ListServiceLifecycleSteps;
use App\Filament\Resources\ServiceLifecycleSteps\Schemas\ServiceLifecycleStepForm;
use App\Filament\Resources\ServiceLifecycleSteps\Tables\ServiceLifecycleStepsTable;
use App\Models\ServiceLifecycleStep;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ServiceLifecycleStepResource extends Resource
{
    protected static ?string $model = ServiceLifecycleStep::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQueueList;

    protected static string | UnitEnum| null $navigationGroup = 'Serviços';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Serviços - Metodologia';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ServiceLifecycleStepForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiceLifecycleStepsTable::configure($table);
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
            'index' => ListServiceLifecycleSteps::route('/'),
            'create' => CreateServiceLifecycleStep::route('/create'),
            'edit' => EditServiceLifecycleStep::route('/{record}/edit'),
        ];
    }
}
