# laravel-force-https-url-scheme
Force https url schema middleware for Laravel 5

[![Build Status](https://travis-ci.org/shin1x1/laravel-force-https-url-scheme.svg?branch=travis)](https://travis-ci.org/shin1x1/laravel-force-https-url-scheme)
[![Latest Stable Version](https://poser.pugx.org/shin1x1/laravel-force-https-url-scheme/version.svg)](https://packagist.org/packages/shin1x1/laravel-force-https-url-scheme)

## Install

```
$ composer require shin1x1/laravel-force-https-url-scheme
```

## Usage

This package provide to redirect http to https. It's implemented `Illuminate\Contracts\Routing\Middleware` interface that means you can use it as Laravel middleware. This feature is enabled in `production` environments only.

### As global HTTP middleware

* app/Http/Kernel.php

```
<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Shin1x1\ForceHttpsUrlScheme\ForceHttpsUrlScheme', // <---added
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
        'App\Http\Middleware\VerifyCsrfToken',
    ];}

```

### As route middleware

* app/Http/Kernel.php

```
<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
(snip)
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => 'App\Http\Middleware\Authenticate',
        'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
        'force_https_url_scheme' => 'Shin1x1\ForceHttpsUrlScheme\ForceHttpsUrlScheme', // <---added 
    ];
}
```

* app/Http/routes.php

```
Route::group(['middleware' => 'force_https_url_scheme'], function () {
    get('/admin/', function () {
        // something here
    });
});
```
