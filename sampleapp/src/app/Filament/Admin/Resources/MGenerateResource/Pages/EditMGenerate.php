<?php

namespace App\Filament\Admin\Resources\MGenerateResource\Pages;

use App\Filament\Admin\Resources\MGenerateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMGenerate extends EditRecord
{
    protected static string $resource = MGenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
