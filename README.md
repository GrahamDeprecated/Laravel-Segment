# Laravel-Segment
Segment.com wrapper for Laravel 4

## Installation

Add the following to your `composer.json` file.

```json
"require": {
    "cachethq/segment": "1.0.*@dev"
}
```

Get the package installed.

```bash
$ composer update
```

Add the service provider to `app.php`

```php
'providers' => [
    // ...
    'CachetHQ\Segment\SegmentServiceProvider',
],
```

If you want to use the Facade, also add the alias:

```php
'aliases' => [
    // ...
    'Segment'  => 'CachethQ\Segment\Facades\Segment',
],
```

Install the configuration file.

```bash
$ php artisan config:publish cachethq/segment
```

Update the new configuration file with your `write_key` as provided by [Segment.com](https://segment.com)

## License

Laravel-Segment is licensed under [The MIT License (MIT)](LICENSE).
