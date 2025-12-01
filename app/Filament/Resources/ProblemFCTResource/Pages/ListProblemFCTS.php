<?php

namespace App\Filament\Resources\ProblemFCTResource\Pages;

use App\Filament\Resources\ProblemFCTResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProblemFCTS extends ListRecords
{
    protected static string $resource = ProblemFCTResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}