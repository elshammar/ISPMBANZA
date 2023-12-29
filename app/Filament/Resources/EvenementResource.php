<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\evenements;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\EvenementResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\EvenementResource\RelationManagers;

class EvenementResource extends Resource
{
    protected static ?string $model = evenements::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre'),
                TextInput::make('descrip'),
                TextInput::make('lieuEven'),
                DatePicker::make('date'),
                TimePicker::make('heure')
                    ->datalist([
                        '09:00',
                        '09:30',
                        '10:00',
                        '10:30',
                        '11:00',
                        '11:30',
                        '12:00',
                    ]),
                SpatieMediaLibraryFileUpload::make('images')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titre'),
                TextColumn::make('descrip'),
                TextColumn::make('lieuEven'),
                TextColumn::make('date')
                    ->date(),
                TextColumn::make('heure')
                    ->time(),
                SpatieMediaLibraryImageColumn::make('images')
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
            'index' => Pages\ListEvenements::route('/'),
            'create' => Pages\CreateEvenement::route('/create'),
            'edit' => Pages\EditEvenement::route('/{record}/edit'),
        ];
    }
}
