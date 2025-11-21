<?php

namespace App\Filament\Resources\RoiSettingResource\Pages;

use App\Filament\Resources\RoiSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoiSetting extends EditRecord
{
    protected static string $resource = RoiSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
