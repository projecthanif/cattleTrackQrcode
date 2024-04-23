<?php

namespace App\Filament\Resources\CattleRecordResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CattleHealthRecordRelationManager extends RelationManager
{
    protected static string $relationship = 'cattleHealthRecord';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('cattle_id')
            ->columns([
                Tables\Columns\TextColumn::make('cattle_id'),
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
