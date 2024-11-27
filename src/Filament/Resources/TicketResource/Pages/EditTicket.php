<?php

namespace TomatoPHP\FilamentSupport\Filament\Resources\TicketResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use TomatoPHP\FilamentSupport\Filament\Resources\TicketResource;

class EditTicket extends EditRecord
{
    protected static string $resource = TicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
