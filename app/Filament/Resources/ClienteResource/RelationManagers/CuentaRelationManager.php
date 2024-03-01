<?php

namespace App\Filament\Resources\ClienteResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CuentaRelationManager extends RelationManager
{
    protected static string $relationship = 'cuenta';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                //        'no_cuenta' => 'required|string|max:255'
                //'Saldo' => 'required|numeric',
                //        'Fecha_Apertura' => 'required',
                //        'tipo_cuenta_id' => 'required',
                //        'Estado' => 'required|string',
                //        'moneda_id' => 'required',
                Forms\Components\TextInput::make('no_cuenta')
                    ->label('No Cuenta')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Saldo')
                    ->label('Saldo')
                    ->required()
                    ->numeric(),
                Forms\Components\Datepicker::make('Fecha_Apertura')
                    ->label('Fecha de Apertura')
                    ->required(),

                Forms\Components\Select::make('moneda_id')
                    ->label('Moneda')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('moneda', 'nombre'),
                Forms\Components\Select::make('tipo_cuenta_id')
                    ->label('Tipo de Cuenta')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('tipoCuenta', 'descripcion'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('numero')
            ->columns([
                Tables\Columns\TextColumn::make('no_cuenta')
                    ->label('No Cuenta')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Saldo')
                    ->label('Saldo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Fecha_Apertura')
                    ->label('Fecha de Apertura')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipoCuenta.descripcion')
                    ->label('Tipo de Cuenta')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Estado')
                    ->label('Estado')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('moneda.nombre')
                    ->label('Moneda')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
