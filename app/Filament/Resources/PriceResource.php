<?php
/**
 * FILAMENT RESOURCE
 * Price Resource
 * 
 * File Location: app/Filament/Resources/PriceResource.php
 */

namespace App\Filament\Resources;

use App\Models\Price;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PriceResource extends Resource
{
    protected static ?string $model = Price::class;
    protected static ?string $navigationIcon = 'heroicon-o-bolt';
    protected static ?string $navigationLabel = 'Fuel Prices';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('fuel_type')
                    ->options([
                        'Petrol' => 'Petrol (PMS)',
                        'Diesel' => 'Diesel (AGO)',
                        'Gas' => 'LPG / Cooking Gas',
                    ])
                    ->required()
                    ->disabled(fn($record) => $record !== null)
                    ->unique('prices', 'fuel_type', ignoreRecord: true)
                    ->native(false),
                
                Forms\Components\TextInput::make('price_per_unit')
                    ->label('Price per Unit (₦)')
                    ->numeric()
                    ->step(0.01)
                    ->minValue(0)
                    ->required()
                    ->prefix('₦')
                    ->inputMode('decimal'),
                
                Forms\Components\Select::make('currency')
                    ->options([
                        'NGN' => 'Nigerian Naira (₦)',
                        'USD' => 'US Dollar ($)',
                    ])
                    ->default('NGN')
                    ->required()
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fuel_type')
                    ->label('Fuel Type')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color(fn(string $state) => match ($state) {
                        'Petrol' => 'blue',
                        'Diesel' => 'warning',
                        'Gas' => 'success',
                    }),
                
                Tables\Columns\TextColumn::make('price_per_unit')
                    ->label('Current Price')
                    ->sortable()
                    ->formatStateUsing(fn($state) => '₦' . number_format($state, 2)),
                
                Tables\Columns\TextColumn::make('currency')
                    ->label('Currency')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('updatedBy.name')
                    ->label('Last Updated By')
                    ->sortable()
                    ->placeholder('System'),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([])
            ->defaultSort('fuel_type');
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\PriceResource\Pages\ListPrices::route('/'),
            'create' => \App\Filament\Resources\PriceResource\Pages\CreatePrice::route('/create'),
            'edit' => \App\Filament\Resources\PriceResource\Pages\EditPrice::route('/{record}/edit'),
        ];
    }
}
