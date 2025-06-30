<?php

namespace App\Filament\Admin\Resources\DimProductResource\Pages;

use App\Filament\Admin\Resources\DimProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDimProducts extends ListRecords
{
    protected static string $resource = DimProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
