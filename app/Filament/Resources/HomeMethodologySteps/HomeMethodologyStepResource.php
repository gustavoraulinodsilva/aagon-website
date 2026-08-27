<?php

namespace App\Filament\Resources\HomeMethodologySteps;

use App\Filament\Resources\HomeMethodologySteps\Pages\CreateHomeMethodologyStep;
use App\Filament\Resources\HomeMethodologySteps\Pages\EditHomeMethodologyStep;
use App\Filament\Resources\HomeMethodologySteps\Pages\ListHomeMethodologySteps;
use App\Filament\Resources\HomeMethodologySteps\Schemas\HomeMethodologyStepForm;
use App\Filament\Resources\HomeMethodologySteps\Tables\HomeMethodologyStepsTable;
use App\Models\HomeMethodologyStep;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HomeMethodologyStepResource extends Resource
{
    protected static ?string $model = HomeMethodologyStep::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedListBullet;

    protected static string | UnitEnum| null $navigationGroup = 'Página Inicial';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Home - Metodologia';

    public static function form(Schema $schema): Schema
    {
        return HomeMethodologyStepForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeMethodologyStepsTable::configure($table);
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
            'index' => ListHomeMethodologySteps::route('/'),
            'create' => CreateHomeMethodologyStep::route('/create'),
            'edit' => EditHomeMethodologyStep::route('/{record}/edit'),
        ];
    }
}
