<?php

namespace App\Filament\Admin\Resources\DimStoreResource\Pages;

use App\Filament\Admin\Resources\DimStoreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDimStores extends ListRecords
{
    protected static string $resource = DimStoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
