const { mix } = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css');

mix.combine([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/mdb.css'], 'public/css/all.css')
    .copy('resources/assets/css/welcome.css', 'public/css')
    .copy('resources/assets/js/mdb', 'public/js')
    .copy('resources/assets/font/roboto', 'public/font/roboto');