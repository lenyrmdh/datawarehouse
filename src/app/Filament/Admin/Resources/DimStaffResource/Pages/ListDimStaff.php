<?php

namespace App\Filament\Admin\Resources\DimStaffResource\Pages;

use App\Filament\Admin\Resources\DimStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDimStaff extends ListRecords
{
    protected static string $resource = DimStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
