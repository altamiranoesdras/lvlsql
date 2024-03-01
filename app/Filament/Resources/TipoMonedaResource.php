<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipoMonedaResource\Pages;
use App\Filament\Resources\TipoMonedaResource\RelationManagers;
use App\Models\TipoMoneda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TipoMonedaResource extends Resource
{
    protected static ?string $model = TipoMoneda::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('nombre')
                    ->label('Nombre')
                    ->required(),
                Forms\Components\Select::make('estado')
                    ->label('Estado')
                    ->searchable()
                    ->options([
                        'activo' => 'Activo',
                        'inactivo' => 'Inactivo',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('simbolo')
                    ->label('Simbolo')
                    ->rules('required|string|max:10')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // 'nombre' => 'string',
                //        'estado' => 'string',
                //        'simbolo' => 'string'
                Tables\Columns\TextColumn::make('nombre')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('simbolo')
                    ->label('Simbolo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado')
                    ->label('Estado')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTipoMonedas::route('/'),
            'create' => Pages\CreateTipoMoneda::route('/create'),
            'edit' => Pages\EditTipoMoneda::route('/{record}/edit'),
        ];
    }
}
