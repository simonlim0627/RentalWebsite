<?php

namespace App\Filament\Admin1\Resources;

use App\Filament\Admin1\Resources\ChirpResource\Pages;
use App\Filament\Admin1\Resources\ChirpResource\RelationManagers;
use App\Models\Chirp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;

class ChirpResource extends Resource
{
    protected static ?string $model = Chirp::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                ->label('Username'),
                TextColumn::make('message')
                ->label('Message'),
                TextColumn::make('updated_at')
                ->label('Date & Time'),
            ])
            ->filters([
                //
            ])
            ->actions([
                //
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
            'index' => Pages\ListChirps::route('/'),
            'create' => Pages\CreateChirp::route('/create'),
            //'edit' => Pages\EditChirp::route('/{record}/edit'),
        ];
    }
}
