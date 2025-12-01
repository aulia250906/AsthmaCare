<?php

namespace App\Filament\Resources\HasilTes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

// TAMBAHAN IMPORT
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Forms; // buat DatePicker di filter tanggal

class HasilTesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Nama User (relasi)
                TextColumn::make('user.name')
                    ->label('User')
                    ->sortable()
                    ->searchable(),

                // Tanggal Tes
                TextColumn::make('tanggal_tes')
                    ->label('Tanggal Tes')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),

                // Skor
                TextColumn::make('score')
                    ->label('Skor')
                    ->sortable(),

                // Risiko (badge berwarna)
                TextColumn::make('resiko')
                    ->label('Risiko')
                    ->badge()
                    ->colors([
                        'danger'   => 'High',
                        'warning'  => 'Moderate',
                        'success'  => 'Low',
                    ])
                    ->sortable(),

                // Narasi (dipendekin di list, full-nya bisa dilihat di edit/detail)
                TextColumn::make('narasi')
                    ->label('Narasi')
                    ->limit(60)     // kalau mau full hapus aja baris ini
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Filter berdasarkan risiko
                SelectFilter::make('resiko')
                    ->label('Risiko')
                    ->options([
                        'High'     => 'High',
                        'Moderate' => 'Moderate',
                        'Low'      => 'Low',
                    ]),

                // Filter range tanggal tes
                Filter::make('tanggal_tes')
                    ->label('Tanggal Tes')
                    ->form([
                        Forms\Components\DatePicker::make('from')
                            ->label('Dari'),
                        Forms\Components\DatePicker::make('until')
                            ->label('Sampai'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['from'] ?? null,
                                fn ($q, $date) => $q->whereDate('tanggal_tes', '>=', $date)
                            )
                            ->when(
                                $data['until'] ?? null,
                                fn ($q, $date) => $q->whereDate('tanggal_tes', '<=', $date)
                            );
                    }),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
