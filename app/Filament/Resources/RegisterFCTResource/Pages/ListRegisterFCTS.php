<?php

namespace App\Filament\Resources\RegisterFCTResource\Pages;

use App\Filament\Resources\RegisterFCTResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegisterFCTS extends ListRecords
{
    protected static string $resource = RegisterFCTResource::class;
    
     protected static ?string $label = 'FCT Machine List';
    protected static ?string $pluralLabel = 'FCT Machine List';
    protected static ?string $navigationLabel = 'FCT Machine List';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
