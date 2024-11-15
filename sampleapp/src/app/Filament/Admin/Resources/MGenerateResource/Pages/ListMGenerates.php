<?php

namespace App\Filament\Admin\Resources\MGenerateResource\Pages;

use App\Filament\Admin\Resources\MGenerateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMGenerates extends ListRecords
{
    protected static string $resource = MGenerateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
