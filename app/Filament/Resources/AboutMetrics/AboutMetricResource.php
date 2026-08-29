<?php

namespace App\Filament\Resources\AboutMetrics;

use App\Filament\Resources\AboutMetrics\Pages\CreateAboutMetric;
use App\Filament\Resources\AboutMetrics\Pages\EditAboutMetric;
use App\Filament\Resources\AboutMetrics\Pages\ListAboutMetrics;
use App\Filament\Resources\AboutMetrics\Schemas\AboutMetricForm;
use App\Filament\Resources\AboutMetrics\Tables\AboutMetricsTable;
use App\Models\AboutMetric;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutMetricResource extends Resource
{
    protected static ?string $model = AboutMetric::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPresentationChartLine;

    protected static string | UnitEnum| null $navigationGroup = 'Sobre a AAGON';

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = 'Sobre - Metricas';

    protected static ?string $recordTitleAttribute = 'label';

    public static function form(Schema $schema): Schema
    {
        return AboutMetricForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutMetricsTable::configure($table);
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
            'index' => ListAboutMetrics::route('/'),
            'create' => CreateAboutMetric::route('/create'),
            'edit' => EditAboutMetric::route('/{record}/edit'),
        ];
    }
}
