<?php

namespace TomatoPHP\FilamentSupport\Filament\Resources\TicketCommentResource\Pages;

use TomatoPHP\FilamentSupport\Filament\Resources\TicketCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTicketComments extends ListRecords
{
    protected static string $resource = TicketCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
