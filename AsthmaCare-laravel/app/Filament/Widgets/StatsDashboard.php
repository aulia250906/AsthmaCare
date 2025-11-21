<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Artikel;
use App\Models\Doctor;
use App\Models\Review;
use App\Models\User;

class StatsDashboard extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Artikel', Artikel::count())
                ->description('Total artikel')
                ->color('success'),

            Stat::make('Jumlah Dokter', Doctor::count())
                ->description('Total dokter yang terdaftar')
                ->color('info'),

            Stat::make('Jumlah Ulasan', Review::count())
                ->description('Total ulasan pengguna')
                ->color('warning'),

            Stat::make('Jumlah pengguna', User::count())
                ->description('Total pengguna sistem')
                ->color('primary'),
        ];
    }
}
