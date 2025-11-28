<?php

namespace App\Filament\Resources\HasilTes;

use App\Filament\Resources\HasilTes\Pages\CreateHasilTes;
use App\Filament\Resources\HasilTes\Pages\EditHasilTes;
use App\Filament\Resources\HasilTes\Pages\ListHasilTes;
use App\Filament\Resources\HasilTes\Schemas\HasilTesForm;
use App\Filament\Resources\HasilTes\Tables\HasilTesTable;
use App\Models\HasilTes;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HasilTesResource extends Resource
{
    protected static ?string $model = HasilTes::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-heart';

    protected static UnitEnum|string|null $navigationGroup = 'Hasil Tes Asna';

    protected static ?string $label = 'Tes Asma';
    
    protected static ?string $pluralLabel = 'Tes Asma';

    public static function form(Schema $schema): Schema
    {
        return HasilTesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HasilTesTable::configure($table);
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
            'index' => ListHasilTes::route('/'),
            'create' => CreateHasilTes::route('/create'),
            'edit' => EditHasilTes::route('/{record}/edit'),
        ];
    }
}
