# Laravel Rihanna

## Requirements

* PHP 5.6+
* Laravel 5.4+

## Installation

1. **Require**: Require the package: `composer require lookitsatravis/laravel-rihanna`
1. **Bootstrap**: If your Laravel version is...
    1. 5.5+: Package is [automatically registered](https://medium.com/@taylorotwell/package-auto-discovery-in-laravel-5-5-ea9e3ab20518). Nothing further needs to be done.
    1. 5.4 or lower: Register service provider by going into `app/config/app.php` and adding `Lookitsatravis\Rihanna\RihannaServiceProvider::class` to providers array.

## Running

Replace any `php artisan queue:work` calls with the new command:

`php artisan queue:work:work:work:work:work`