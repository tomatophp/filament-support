![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-support/master/art/screenshot.jpg)

# Filament support

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-support/version.svg)](https://packagist.org/packages/tomatophp/filament-support)
[![License](https://poser.pugx.org/tomatophp/filament-support/license.svg)](https://packagist.org/packages/tomatophp/filament-support)
[![Downloads](https://poser.pugx.org/tomatophp/filament-support/d/total.svg)](https://packagist.org/packages/tomatophp/filament-support)

Manage your customers contact us form and customer support ticking system for FilamentPHP

## Installation

```bash
composer require tomatophp/filament-support
```
after install your package please run this command

```bash
php artisan filament-support:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentSupport\FilamentSupportPlugin::make())
```


## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-support-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-support-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-support-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-support-migrations"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
