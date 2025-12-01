<?php

namespace App\Filament\Resources\RegisterFCTResource\Pages;

use App\Filament\Resources\RegisterFCTResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegisterFCT extends EditRecord
{
    protected static string $resource = RegisterFCTResource::class;
    protected static ?string $label = 'FCT Machine List';
    protected static ?string $pluralLabel = 'FCT Machine List';
    protected static ?string $navigationLabel = 'FCT Machine List';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
