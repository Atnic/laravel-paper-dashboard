# Laravel Paper Dashboard
Laravel Package for integrating Paper Dashboard template and this package is Laravel Mix friendly. Currently this package can be integrated easily only on fresh installation.

# Installation
```bash
composer require atnic/laravel-paper-dashboard
```
If you are using Laravel 5.5 above skip this step. Add this line on ```config/app.php```, on  ```providers```
```php
'providers' => [
  ...
  Atnic\PaperDashboard\Providers\AppServiceProvider::class,
  ...
]
```
And then run,
```bash
php artisan make:paper-dashboard
```
Let's see what we've install. First, make sure that you already ran ```php artisan migrate``` command, then do
```bash
php artisan serve
```
Viola! You've running a Laravel site using Paper Dashboard.

For more information on command
```bash
php artisan make:paper-dashboard --help
```

# Usage
This package provides view for auth and app. Take a look at ```resources/views/layouts/app.blade.php```.

In this file you can extends global section like menu.

To extends menu add this in ```app.blade.php```
```blade
@section('sidebar-menu')
<ul class="nav">
  <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
    <a href="{{ route('home') }}">
      <i class="nc-icon nc-bank"></i>
      <p>Home</p>
    </a>
  </li>
</ul>
@endsection
```

This package give you free of choice to use any Laravel Package for Menu. We recommend [spatie/laravel-menu](https://github.com/spatie/laravel-menu) or [lavary/laravel-menu](https://github.com/lavary/laravel-menu).

Any new created page should extends this view.
```blade
@extends('layouts.app')

// Your blade here
```

# Configuration and Views Customization
## Config
To publish this package config to your app config run
```bash
php artisan vendor:publish --provider="Atnic\PaperDashboard\Providers\AppServiceProvider" --tag="config"
```
## Views
To publish this package views so you can customize on your own run
```bash
php artisan vendor:publish --provider="Atnic\PaperDashboard\Providers\AppServiceProvider" --tag="views"
```

# Next Step
First of all, you should understand how to use [Laravel Mix](https://laravel.com/docs/5.5/mix).

Paper Dashboard need some package on npm. First you need to run
```bash
npm install
```

Install Paper Dashboard needed package from npm
```bash
npm install --save-dev bootstrap bootstrap-notify bootstrap-sass font-awesome popper.js perfect-scrollbar
```

Run Laravel Mix command
```bash
npm run development
```
or use ```production``` minimize output
```bash
npm run production
```

Then have a good look on these files
- ```webpack.mix.js```
- ```resources/assets/js/paper-dashboard.js```
- ```resources/assets/js/auth.js```
- ```resources/assets/sass/paper-dashboard.scss```
- ```resources/assets/sass/auth.scss```

Happy experimenting!
