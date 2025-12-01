<?php

namespace App\Filament\Resources\HistoryFCTResource\Pages;

use App\Filament\Resources\HistoryFCTResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistoryFCTS extends ListRecords
{
    protected static string $resource = HistoryFCTResource::class;

    protected static ?string $title = 'History FCT';
    protected static bool $canCreate = false;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getTableActions(): array
    {
        return [
            Actions\ViewAction::make(),
        ];
    }
}
