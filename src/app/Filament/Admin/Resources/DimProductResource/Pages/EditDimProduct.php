<?php

namespace App\Filament\Admin\Resources\DimProductResource\Pages;

use App\Filament\Admin\Resources\DimProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimProduct extends EditRecord
{
    protected static string $resource = DimProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
