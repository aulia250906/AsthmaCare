<?php

namespace App\Filament\Resources\Reviews\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Illuminate\Support\Facades\Auth;

class ReviewForm
{
    
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                
                Forms\Components\TextInput::make('name')
                    ->label('Nama Reviewer')
                    ->required(),

                Forms\Components\TextInput::make('rating')
                    ->label('Rating')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->required(),

                Forms\Components\Textarea::make('comment')
                    ->label('Komentar')
                    ->rows(4)
                    ->required(),
            ]);
    }
}
