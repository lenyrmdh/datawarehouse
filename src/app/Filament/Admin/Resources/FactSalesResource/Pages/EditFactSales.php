<?php

namespace App\Filament\Admin\Resources\FactSalesResource\Pages;

use App\Filament\Admin\Resources\FactSalesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFactSales extends EditRecord
{
    protected static string $resource = FactSalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
