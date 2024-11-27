<?php

namespace TomatoPHP\FilamentSupport\Filament\Resources\TicketResource\Pages;

use TomatoPHP\FilamentSupport\Filament\Resources\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicket extends CreateRecord
{
    protected static string $resource = TicketResource::class;
}
