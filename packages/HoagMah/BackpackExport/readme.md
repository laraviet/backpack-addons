# BackpackExport

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Requires
1. https://github.com/barryvdh/laravel-dompdf
2. https://github.com/Maatwebsite/Laravel-Excel

## Installation

Via Composer

``` bash
$ composer require hoagmah/backpackexport
```

## Setup
``` 
$ php artisan vendor:publish --provider=HoagMah\\BackpackExport\\BackpackExportServiceProvider

```

## Usage
Each crud controller in Laravel backpack:
1. Extends HoagMah\BackpackExport\Http\Controllers\CrudController instead of Backpack\CRUD\app\Http\Controllers\CrudController
2. Use trait HoagMah\Traits\Export in curd controller
3. Add button export_excel and export_pdf in list
4. Add route /export-excel to action exportExcel() and /export-pdf to exportPdf() in custom.php

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/hoagmah/backpackexport.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hoagmah/backpackexport.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hoagmah/backpackexport/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/hoagmah/backpackexport
[link-downloads]: https://packagist.org/packages/hoagmah/backpackexport
[link-travis]: https://travis-ci.org/hoagmah/backpackexport
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/hoagmah
[link-contributors]: ../../contributors
