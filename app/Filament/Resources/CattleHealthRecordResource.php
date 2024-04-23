<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CattleHealthRecordResource\Pages;
use App\Filament\Resources\CattleHealthRecordResource\RelationManagers;
use App\Models\CattleHealthRecord;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CattleHealthRecordResource extends Resource
{
    protected static ?string $model = CattleHealthRecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cattle_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('medication'),
                Forms\Components\TextInput::make('dosage'),
                Forms\Components\MarkdownEditor::make('description')
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('veterinary_notes')
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('S/N')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cattle_id')
                ->label('Cattle ID'),
                Tables\Columns\TextColumn::make('medication'),
                Tables\Columns\TextColumn::make('dosage'),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCattleHealthRecords::route('/'),
            'create' => Pages\CreateCattleHealthRecord::route('/create'),
            'edit' => Pages\EditCattleHealthRecord::route('/{record}/edit'),
        ];
    }
}
