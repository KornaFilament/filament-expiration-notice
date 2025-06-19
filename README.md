# Filament Expiration Notice

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marcelweidum/filament-expiration-notice.svg?style=flat-square)](https://packagist.org/packages/marcelweidum/filament-expiration-notice)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/marcelweidum/filament-expiration-notice/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/marcelweidum/filament-expiration-notice/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/marcelweidum/filament-expiration-notice/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/marcelweidum/filament-expiration-notice/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marcelweidum/filament-expiration-notice.svg?style=flat-square)](https://packagist.org/packages/marcelweidum/filament-expiration-notice)



Customize the livewire expiration notice.

## Installation

You can install the package via composer:

```bash
composer require marcelweidum/filament-expiration-notice
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-expiration-notice-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-expiration-notice-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-expiration-notice-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$expirationNoticePlugin = new MarcelWeidum\ExpirationNoticePlugin();
echo $expirationNoticePlugin->echoPhrase('Hello, MarcelWeidum!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [MarcelWeidum](https://github.com/MarcelWeidum)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
