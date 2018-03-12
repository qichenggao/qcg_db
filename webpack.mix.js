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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copyDirectory('resources/assets/public/js', 'public/js')
   .copyDirectory('resources/assets/public/css', 'public/css')
   .copyDirectory('resources/assets/public/img', 'public/img')
   .copyDirectory('resources/assets/public/fonts', 'public/fonts')
   .copyDirectory('resources/assets/hexagons/css', 'public/css')
   .copyDirectory('resources/assets/hexagons/example_img', 'public/img');

