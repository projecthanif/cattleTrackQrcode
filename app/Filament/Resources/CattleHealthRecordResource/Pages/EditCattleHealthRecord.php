<?php

namespace App\Filament\Resources\CattleHealthRecordResource\Pages;

use App\Filament\Resources\CattleHealthRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCattleHealthRecord extends EditRecord
{
    protected static string $resource = CattleHealthRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
