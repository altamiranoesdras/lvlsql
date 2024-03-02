<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClienteResource\Pages;
use App\Filament\Resources\ClienteResource\RelationManagers;
use App\Models\Cliente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClienteResource extends Resource
{
    protected static ?string $model = Cliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('dpi')
                    ->label('DPI')
                    ->placeholder('DPI')
                    ->numeric()
                    ->rules('required|numeric', 'max:100'),
                Forms\Components\TextInput::make('Nombre')
                    ->label('Nombre')
                    ->placeholder('Nombre')
                    ->rules('required', 'max:100'),
                Forms\Components\TextInput::make('Apellido')
                    ->label('Apellido')
                    ->placeholder('Apellido')
                    ->rules('required', 'max:100'),
                Forms\Components\TextInput::make('Direccion')
                    ->label('Direccion')
                    ->placeholder('Direccion')
                    ->rules('required', 'max:100'),
                Forms\Components\TextInput::make('Telefono')
                    ->label('Telefono')
                    ->placeholder('Telefono')
                    ->numeric()
                    ->rules('required', 'max:8'),
                Forms\Components\Datepicker::make('Fecha_Nac')
                    ->label('Fecha de Nacimiento')
                    ->placeholder('Fecha de Nacimiento')
                    ->rules('required'),
                Forms\Components\Select::make('Estado')
                    ->label('Estado')
                    ->placeholder('Estado')
                    ->searchable()
                    ->options([
                        'activo' => 'Activo',
                        'inactivo' => 'Inactivo',
                    ])
                    ->rules('required'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('dpi')
                    ->label('DPI')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Nombre')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Apellido')
                    ->label('Apellido')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('Telefono')
                    ->label('Telefono')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Fecha_Nac')
                    ->label('Fecha de Nacimiento')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Estado')
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
            RelationManagers\CuentaRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClientes::route('/'),
            'create' => Pages\CreateCliente::route('/create'),
            'edit' => Pages\EditCliente::route('/{record}/edit'),
        ];
    }
}
