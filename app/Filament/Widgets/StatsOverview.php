<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Article;
use App\Models\Document;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Artikel', Article::count())
                ->description('Jumlah artikel berita sekolah')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success'),
            Stat::make('Total Dokumen', Document::count())
                ->description('Dokumen unduhan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),
        ];
    }
}
