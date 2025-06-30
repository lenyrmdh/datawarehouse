<?php

namespace App\Filament\Admin\Resources\DimStaffResource\Pages;

use App\Filament\Admin\Resources\DimStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimStaff extends EditRecord
{
    protected static string $resource = DimStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
