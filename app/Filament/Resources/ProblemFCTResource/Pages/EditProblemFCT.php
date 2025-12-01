<?php

namespace App\Filament\Resources\ProblemFCTResource\Pages;

use App\Filament\Resources\ProblemFCTResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProblemFCT extends EditRecord
{
    protected static string $resource = ProblemFCTResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}