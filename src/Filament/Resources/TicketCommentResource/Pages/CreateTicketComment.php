<?php

namespace TomatoPHP\FilamentSupport\Filament\Resources\TicketCommentResource\Pages;

use TomatoPHP\FilamentSupport\Filament\Resources\TicketCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicketComment extends CreateRecord
{
    protected static string $resource = TicketCommentResource::class;
}
