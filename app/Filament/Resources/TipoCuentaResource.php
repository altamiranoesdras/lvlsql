<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipoCuentaResource\Pages;
use App\Filament\Resources\TipoCuentaResource\RelationManagers;
use App\Models\TipoCuenta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TipoCuentaResource extends Resource
{
    protected static ?string $model = TipoCuenta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('descripcion')
                    ->label('Nombre')
                    ->placeholder('Nombre')
                    ->rules('required', 'max:100'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('descripcion')
                    ->label('Nombre')
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
            'index' => Pages\ListTipoCuentas::route('/'),
            'create' => Pages\CreateTipoCuenta::route('/create'),
            'edit' => Pages\EditTipoCuenta::route('/{record}/edit'),
        ];
    }
}
