let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .scripts([
        'resources/assets/vendor/jquery/jquery.min.js',
        'resources/assets/vendor/scrollreveal/scrollreveal.min.js',
        'resources/assets/vendor/magnific-popup/jquery.magnific-popup.min.js',
        'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/vendor/jquery-easing/jquery.easing.min.js',
        'resources/assets/js/app-config.js',
    ], 'public/js/vendor.js')
    .styles([
        'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
        'resources/assets/vendor/font-awesome/css/font-awesome.min.css',
        'resources/assets/vendor/magnific-popup/magnific-popup.css',
    ], 'public/css/vendor.css')
    .browserSync({
        proxy: 'localhost:8000',
        open: false,
    })
    .options({
        processCssUrls: false,
    })
