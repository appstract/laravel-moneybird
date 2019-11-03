# Laravel Moneybird

[![Latest Version on Packagist](https://img.shields.io/packagist/v/appstract/laravel-moneybird.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-moneybird)
[![Total Downloads](https://img.shields.io/packagist/dt/appstract/laravel-moneybird.svg?style=flat-square)](https://packagist.org/packages/appstract/laravel-moneybird)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/appstract/laravel-moneybird/master.svg?style=flat-square)](https://travis-ci.org/appstract/laravel-moneybird)

## Installation

You can install the package via composer:

``` bash
composer require appstract/laravel-moneybird
```

## Usage

``` php
$contact = Moneybird::contact();

$contact->company_name = 'Appstract';

$contact->save();
```

## Testing

``` bash
composer test
```

## Contributing

Contributions are welcome, [thanks to y'all](https://github.com/appstract/laravel-moneybird/graphs/contributors) :)

## About Appstract

Appstract is a small team from The Netherlands. We create (open source) tools for webdevelopment and write about related subjects on [Medium](https://medium.com/appstract). You can [follow us on Twitter](https://twitter.com/teamappstract), [buy us a beer](https://www.paypal.me/teamappstract/10) or [support us on Patreon](https://www.patreon.com/appstract).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
