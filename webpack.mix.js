const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/litepicker.js', 'public/js')
    .js('resources/js/scripts.js', 'public/js')
    .js('resources/js/toasts.js', 'public/js')
    .js('resources/js/datatables/datatables-simple-demo.js', 'public/js/datatables')
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/styles.css', 'public/css')
    .sourceMaps();
