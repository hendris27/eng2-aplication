<?php

namespace App\Filament\Resources\HistoryFCTResource\Pages;

use App\Filament\Resources\HistoryFCTResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Widgets\Widget;

class ViewHistoryFCT extends ViewRecord
{
    protected static string $resource = HistoryFCTResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            new class($this->record) extends Widget {
                protected static string $view = 'filament.widgets.history-fct-info';
                protected static ?int $columnSpan = 1; // coba 3 untuk full, ubah ke 2/1 jika perlu
                public function __construct(public $record)
                {
                }

                public function getData(): array
                {
                    // kembalikan 'record' agar blade tetap bisa pakai $record->...
                    return [
                        'record' => $this->record,
                    ];
                }
            },
        ];
    }
}