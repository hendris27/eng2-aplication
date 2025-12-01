<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProblemFCTResource\Pages;
use App\Models\ProblemFCT;
use App\Models\RegisterFCT;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProblemFCTResource extends Resource
{
    protected static ?string $model = ProblemFCT::class;
    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';
    protected static ?string $navigationLabel = 'Problem FCT';
    protected static ?string $modelLabel = 'Problem FCT';
    protected static ?string $pluralModelLabel = 'Problem FCT';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('register_fct_id')
                ->label('Register FCT')
                ->options(fn () => RegisterFCT::pluck('registration_no', 'id'))
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('product_model')->label('Model Produk')->required(),
            Forms\Components\TextInput::make('registration_no')->label('Machine No')->required(),
            Forms\Components\DatePicker::make('date')->label('Date')->required(),
            Forms\Components\TimePicker::make('time')->label('Time')->required(),
            Forms\Components\TextInput::make('step')->label('Step')->required(),
            Forms\Components\TextInput::make('error')->label('Error')->required(),
            Forms\Components\TextInput::make('action')->label('Action')->required(),
            Forms\Components\Select::make('result')->label('Result')->options(['OK' => 'OK', 'NG' => 'NG'])->required(),
            Forms\Components\TextInput::make('pic')->label('PIC')->required()
                 ->searchable(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('registerFct.registration_no')->label('Register FCT'),
                Tables\Columns\TextColumn::make('product_model')->label('Model Produk'),
                Tables\Columns\TextColumn::make('registration_no')->label('Machine No'),
                Tables\Columns\TextColumn::make('date')->label('Date'),
                Tables\Columns\TextColumn::make('time')->label('Time'),
                Tables\Columns\TextColumn::make('step')->label('Step'),
                Tables\Columns\TextColumn::make('error')->label('Error'),
                Tables\Columns\TextColumn::make('action')->label('Action'),
                Tables\Columns\TextColumn::make('result')->label('Result'),
                Tables\Columns\TextColumn::make('pic')->label('PIC'),
                
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->label('deleted')
                    ->icon('heroicon-m-trash'),
                Tables\Actions\EditAction::make()
                 ->label('edit')
                    ->icon('heroicon-m-pencil-square'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProblemFCTS::route('/'),
            'create' => Pages\CreateProblemFCT::route('/create'),
            'edit' => Pages\EditProblemFCT::route('/{record}/edit'),
        ];
    }
}
