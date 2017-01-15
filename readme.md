install the package through Composer.

```php
composer require nm/birdy
```

Then include the service provider inside `config/app.php`.

```php
'providers' => [
    ...
    NM\Birdy\BirdyServiceProvider::class,
    ...
];
```
Publish config

```
php artisan vendor:publish
```
