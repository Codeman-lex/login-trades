<?php

namespace App\Filament\Resources\RoiSettingResource\Pages;

use App\Filament\Resources\RoiSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoiSettings extends ListRecords
{
    protected static string $resource = RoiSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
