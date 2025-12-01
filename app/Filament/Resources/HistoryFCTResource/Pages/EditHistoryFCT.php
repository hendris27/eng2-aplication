<?php

namespace App\Filament\Resources\HistoryFCTResource\Pages;

use App\Filament\Resources\HistoryFCTResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistoryFCT extends EditRecord
   
{
     public function getTitle(): string
    {
        return 'FCT Machine History'; // Ganti judul sesuai keinginan
    }
    protected static string $resource = HistoryFCTResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(), // optional, bisa hapus
        ];
    }

    protected function getFormActions(): array
    {
        return []; // Menghilangkan Save & Cancel
    }

    protected function getHeaderWidgets(): array
{
    return [
        \App\Filament\Resources\HistoryFCTResource\Widgets\HistoryFCTInfoWidget::class,
    ];
}
}

