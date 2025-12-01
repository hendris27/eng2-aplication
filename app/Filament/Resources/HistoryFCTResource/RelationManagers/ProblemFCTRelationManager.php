<?php

namespace App\Filament\Resources\HistoryFCTResource\RelationManagers;

use App\Models\ProblemFCT;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Placeholder;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ProblemFCTRelationManager extends RelationManager
{
    protected static string $relationship = 'problemFcts';
    protected static ?string $label = '';
    protected static ?string $pluralLabel = '';

    // -------------------------------
    // FORM CREATE / EDIT
    // -------------------------------
    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('product_model')
                ->label('Model Produk')
                ->disabled()
                ->default(fn () => $this->getOwnerRecord()->product_model ?? '-')
                ->required(),

            Forms\Components\TextInput::make('registration_no')
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
                ->options([
                    'OK' => 'OK',
                    'NG' => 'NG',
                ])
                ->required(),

            Forms\Components\TextInput::make('pic')
                ->label('PIC')
                ->required(),
        ]);
    }

    // -------------------------------
    // TABLE DENGAN SCHEMA TERPISAH
    // -------------------------------

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')->label('Date')->date()->searchable(),
                Tables\Columns\TextColumn::make('time')->label('Time')->searchable(),
                Tables\Columns\TextColumn::make('step')->label('Step')->searchable(),
                Tables\Columns\TextColumn::make('error')->label('Error')->searchable(),
                Tables\Columns\TextColumn::make('action')->label('Action')->searchable(),
                Tables\Columns\TextColumn::make('result')->label('Result')->searchable(),
                Tables\Columns\TextColumn::make('pic')->label('PIC')->searchable(),
            ])
           
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Create FCT Trouble')
                    ->modalHeading('Create FCT Trouble')
                    ->modalSubmitActionLabel('Simpan'),
                
            ])
            ->searchable()
             ->filters([])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->modalHeading('Edit Problem FCT')
                    ->modalSubmitActionLabel('Update'),

                Tables\Actions\DeleteAction::make()
                    ->modalHeading('Hapus Problem FCT'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
        ;
    }
}
