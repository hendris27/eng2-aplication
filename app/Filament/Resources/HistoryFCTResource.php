<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryFCTResource\Pages;
use App\Filament\Resources\HistoryFCTResource\RelationManagers;
use App\Models\RegisterFCT;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryFCTResource extends Resource
{
    // Ganti model ke RegisterFCT
    protected static ?string $model = RegisterFCT::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'History FCT';
    protected static ?string $modelLabel = 'History FCT';
    protected static ?string $pluralModelLabel = 'History FCT';

    public static function form(Form $form): Form
    {
        return $form->schema([]); // Tidak perlu form, hanya read-only
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('registration_no')->label('Registration No')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('date_registration')->label('Registration Date')->date()->sortable(),
                Tables\Columns\TextColumn::make('customer_by')->label('Customer')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('fabrication_by')->label('Fabrication By')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('product_model')->label('Product Model')->searchable()->sortable(),
                Tables\Columns\BadgeColumn::make('status_fct')->label('Status')->color('primary')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Created')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
    Tables\Actions\Action::make('problem_fct')
    ->label('')
   
            ])
            ->bulkActions([]); // tidak bisa hapus massal
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ProblemFCTRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistoryFCTS::route('/'),
            'edit' => Pages\EditHistoryFCT::route('/{record}'),
        ]; // halaman list dan detail
    }
}
