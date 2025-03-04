<?php

namespace App\Filament\Admin\Resources\DataGuruResource\Pages;

use App\Filament\Admin\Resources\DataGuruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataGurus extends ListRecords
{
    protected static string $resource = DataGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
