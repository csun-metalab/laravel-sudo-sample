# Laravel Sudo Sample Application

This application exists to provide sample usage for the [csun-metalab/laravel-sudo](https://github.com/csun-metalab/laravel-sudo) Composer package.

It also leverages the [csun-metalab/laravel-directory-authentication](https://github.com/csun-metalab/laravel-directory-authentication) package to demonstrate the integration between the two packages.

One of the main features of this example application is the complete customization of the `sudo.blade.php` view in the `resources/views/vendor/sudo` directory. It has been templatized to fit in with the theme of the rest of the application to demonstrate the ease of making it conform to your own look-and-feel.

## Files Involved

These are all of the files containing changes that integrate the `csun-metalab/laravel-sudo` package. You will want to focus primarily on these files when looking through the repository.

### Controller / Kernel Functionality

* `app/Http/Controllers/AuthController.php`
* `app/Http/Controllers/HomeController.php`
* `app/Http/Kernel.php`

### Configuration

* `config/app.php`
* `config/sudo.php`

### Visuals

* `resources/views/auth/login.blade.php`
* `resources/views/layouts/app.blade.php`
* `resources/vendor/sudo/sudo.blade.php`
* `resources/views/home.blade.php`
* `resources/views/submit.blade.php`

### Routing

* `routes/web.php`