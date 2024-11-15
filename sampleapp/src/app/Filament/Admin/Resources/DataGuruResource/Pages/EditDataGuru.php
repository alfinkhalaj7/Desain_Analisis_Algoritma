<?php

namespace App\Filament\Admin\Resources\DataGuruResource\Pages;

use App\Filament\Admin\Resources\DataGuruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataGuru extends EditRecord
{
    protected static string $resource = DataGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
