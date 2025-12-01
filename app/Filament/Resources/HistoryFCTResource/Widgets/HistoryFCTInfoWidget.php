<?php

namespace App\Filament\Resources\HistoryFCTResource\Widgets;

use Filament\Widgets\Widget;

class HistoryFCTInfoWidget extends Widget
{
    protected static string $view = 'filament.widgets.history-fct-info';

    public ?object $record = null;

    protected function getViewData(): array
    {
        return [
            'model' => $this->record->product_model ?? '-',
            'machine' => $this->record->registration_no ?? '-',
        ];
    }
}
