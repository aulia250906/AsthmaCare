<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Dokter')
                    ->required(),
                Forms\Components\TextInput::make('hospital')
                    ->label('Rumah Sakit')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->label('Alamat Rumah Sakit')
                    ->required(),
                 Forms\Components\FileUpload::make('photo')
                    ->label('Foto Dokter')
                    ->image() // hanya boleh gambar
                    ->disk('public')
                    ->directory('doctors') // folder penyimpanan di storage/app/public/doctors
                    ->maxSize(5000)
                    ->visibility('public')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }
}
