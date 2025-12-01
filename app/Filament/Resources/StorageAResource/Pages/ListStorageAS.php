<?php

namespace App\Filament\Resources\StorageAResource\Pages;

use App\Filament\Resources\StorageAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStorageAS extends ListRecords
{
    protected static string $resource = StorageAResource::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
   

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
