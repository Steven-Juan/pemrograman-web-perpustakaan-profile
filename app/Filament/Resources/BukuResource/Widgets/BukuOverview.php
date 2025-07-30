<?php

namespace App\Filament\Resources\BukuResource\Widgets;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class BukuOverview extends BaseWidget
{
    /**
     * The widget stats.
     */
    protected function getStats(): array
    {
        $totalBuku = Buku::count();
        $totalKategori = KategoriBuku::count();

        return [
            Stat::make('Total Buku', Number::format($totalBuku))
                ->description('Jumlah seluruh buku yang terdaftar')
                ->icon('heroicon-o-book-open'),

            Stat::make('Total Kategori', Number::format($totalKategori))
                ->description('Jumlah kategori buku yang tersedia')
                ->icon('heroicon-o-tag'),
        ];
    }
}
