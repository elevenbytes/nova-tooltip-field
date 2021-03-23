# A tooltip field for Nova apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elbytes/nova-tooltip-field.svg?style=flat-square)](https://packagist.org/packages/elbytes/nova-tooltip-field)
[![Total Downloads](https://img.shields.io/packagist/dt/elbytes/nova-tooltip-field.svg?style=flat-square)](https://packagist.org/packages/elbytes/nova-tooltip-field)

With this tooltip field, you can hide some optional content.  
On the index page, this field will work as a tooltip, on all other pages, it's just a text field.

<kbd>
    <img src="demo.gif" alt="Demo video">
</kbd>

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require elbytes/nova-tooltip-field
```

## Usage

In your resource class, add the following to your fields method:

```php
use Elbytes\NovaTooltipField\Tooltip;

....

Tooltip::make('Field')
```

## Contribution

All contributions, big or small, are welcome!

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
