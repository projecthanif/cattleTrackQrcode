<?php

namespace App\Filament\Resources\CattleResource\Pages;

use App\Filament\Resources\CattleResource;
use App\Models\Cattle;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Notifications\Events\NotificationSending;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\Image;

class ViewCattle extends ViewRecord
{
    protected static string $resource = CattleResource::class;


    public function getActions(): array
    {
        return [
            Actions\Action::make('Generate Qrcode')
                ->action(function () {
                    $id = $this->record->id;
                    $qrCodes = QrCode::size(400)->format('png')->generate(env('APP_URL') . "/record/$id");
                    $output_file = '/qr-code/img-' . time() . '.png';
                    $test = Storage::disk('public')->put($output_file, $qrCodes);
                    if ($test) {
                        Cattle::where(['id' => $id])->update(['qr_code' => $output_file]);
                        Notification::make()
                            ->title('QR Code Generated Refresh your browser')
                            ->success()
                            ->send();
                    }
                }),
            Actions\EditAction::make()
                ->color('danger')

        ];
    }
}
