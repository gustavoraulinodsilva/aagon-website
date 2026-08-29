<?php

namespace App\Filament\Resources\AboutApproaches;

use App\Filament\Resources\AboutApproaches\Pages\CreateAboutApproach;
use App\Filament\Resources\AboutApproaches\Pages\EditAboutApproach;
use App\Filament\Resources\AboutApproaches\Pages\ListAboutApproaches;
use App\Filament\Resources\AboutApproaches\Schemas\AboutApproachForm;
use App\Filament\Resources\AboutApproaches\Tables\AboutApproachesTable;
use App\Models\AboutApproach;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AboutApproachResource extends Resource
{
    protected static ?string $model = AboutApproach::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedListBullet;

    protected static string | UnitEnum| null $navigationGroup = 'Sobre a AAGON';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Sobre - Abordagens';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return AboutApproachForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutApproachesTable::configure($table);
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
            'index' => ListAboutApproaches::route('/'),
            'create' => CreateAboutApproach::route('/create'),
            'edit' => EditAboutApproach::route('/{record}/edit'),
        ];
    }
}
