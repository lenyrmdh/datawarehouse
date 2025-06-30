<?php

namespace App\Filament\Admin\Resources\DimCustomerResource\Pages;

use App\Filament\Admin\Resources\DimCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimCustomer extends EditRecord
{
    protected static string $resource = DimCustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
