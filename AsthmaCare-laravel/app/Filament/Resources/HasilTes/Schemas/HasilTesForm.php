<?php

namespace App\Filament\Resources\HasilTes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Illuminate\Support\Facades\Auth;

class HasilTesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                 // User
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name') // pastikan di model HasilTes ada relasi user()
                    ->searchable()
                    ->preload()
                    ->default(Auth::id())
                    ->required(),

                // Tanggal Tes
                Forms\Components\DateTimePicker::make('tanggal_tes')
                    ->label('Tanggal Tes')
                    ->seconds(false)
                    ->default(now())
                    ->required(),

                // Resiko
                Forms\Components\TextInput::make('resiko')
                    ->label('Risiko Asma')
                    ->placeholder('High / Moderate / Low')
                    ->required(),

                // Score
                Forms\Components\TextInput::make('score')
                    ->label('Skor')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(20)
                    ->required(),

                // Narasi
                Forms\Components\Textarea::make('narasi')
                    ->label('Narasi Hasil Analisis')
                    ->rows(5)
                    ->required(),

                // Raw Response (opsional)
                Forms\Components\Textarea::make('raw_response')
                    ->label('Raw Response FastAPI (JSON)')
                    ->rows(6)
                    ->helperText('Opsional — untuk menyimpan respon mentah dari FastAPI.')
                    ->nullable(),
            ]);
    }
}
