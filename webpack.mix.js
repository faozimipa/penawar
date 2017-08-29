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
    .js(
        [
            './node_modules/bootstrap-material-design/dist/js/material.js',
            './node_modules/bootstrap-material-design/dist/js/ripples.js',
            './node_modules/bootstrap-validator/dist/validator.js',

        ],
        './public/js/vendor.js'
    )
   .sass('resources/assets/sass/app.scss', 'public/css');
