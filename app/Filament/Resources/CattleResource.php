<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CattleRecordResource\RelationManagers\CattleHealthRecordRelationManager;
use App\Filament\Resources\CattleResource\Pages;
use App\Models\Cattle;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CattleResource extends Resource
{
    protected static ?string $model = Cattle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\TextInput::make('breed'),
                Forms\Components\TextInput::make('origin'),
                Forms\Components\DatePicker::make('dob'),
                Forms\Components\DatePicker::make('immunization_date'),
                Forms\Components\Hidden::make('farmer_id')
                    ->default(function () {
                        return auth()->user()->id;
                    }),
                Forms\Components\FileUpload::make('qr_code')
                    ->visibleOn('view')
                    ->downloadable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('S/N'),
                Tables\Columns\TextColumn::make('breed'),
                Tables\Columns\TextColumn::make('origin'),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth'),
                Tables\Columns\TextColumn::make('immunization_date')
                    ->label('Last Immunization Date'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            CattleHealthRecordRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCattle::route('/'),
            'create' => Pages\CreateCattle::route('/create'),
            'view' => Pages\ViewCattle::route('/{record}/view'),
            'edit' => Pages\EditCattle::route('/{record}/edit'),
        ];
    }
}
