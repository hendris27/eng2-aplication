<?php

namespace App\Filament\Resources\RegisterFCTResource\RelationManagers;

use App\Models\ProblemFCT;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ProblemFCTRelationManager extends RelationManager
{
    protected static string $relationship = 'problemFcts';
    protected static ?string $label = 'Problem FCT';
    protected static ?string $pluralLabel = 'Problem FCT';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('model_produk')
                ->label('Model Produk')
                ->disabled()
                ->default(fn () => $this->getOwnerRecord()->product_model ?? '-')
                ->required(),
            Forms\Components\TextInput::make('machine_no')
                ->label('Machine No')
                ->disabled()
                ->default(fn () => $this->getOwnerRecord()->registration_no ?? '-')
                ->required(),
            Forms\Components\DatePicker::make('date')
                ->label('Date')
                ->required(),
            Forms\Components\TimePicker::make('time')
                ->label('Time')
                ->required(),
            Forms\Components\TextInput::make('step')
                ->label('Step')
                ->required(),
            Forms\Components\TextInput::make('error')
                ->label('Error')
                ->required(),
            Forms\Components\TextInput::make('action')
                ->label('Action')
                ->required(),
            Forms\Components\Select::make('result')
                ->label('Result')
                ->options(['OK' => 'OK', 'NG' => 'NG'])
                ->required(),
            Forms\Components\TextInput::make('pic')
                ->label('PIC')
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('model_produk')->label('Model Produk'),
                Tables\Columns\TextColumn::make('machine_no')->label('Machine No'),
                Tables\Columns\TextColumn::make('date')->label('Date'),
                Tables\Columns\TextColumn::make('time')->label('Time'),
                Tables\Columns\TextColumn::make('step')->label('Step'),
                Tables\Columns\TextColumn::make('error')->label('Error'),
                Tables\Columns\TextColumn::make('action')->label('Action'),
                Tables\Columns\TextColumn::make('result')->label('Result'),
                Tables\Columns\TextColumn::make('pic')->label('PIC'),
            ])
            ->filters([])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->modalHeading('Tambah Problem FCT')
                    ->modalSubmitActionLabel('Simpan'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
