<?php

namespace TomatoPHP\FilamentSupport;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentSupportPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-support';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): self
    {
        return new FilamentSupportPlugin;
    }
}
