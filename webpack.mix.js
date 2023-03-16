const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.setPublicPath('public');
mix.setResourceRoot('../');

mix.js('resources/js/app.js', 'public/js/t.min.js');

mix.sass('resources/sass/app.scss', 'public/css/t.min.css').options({
    processCssUrls: false
});

mix.sass('resources/sass/font.scss', 'public/css/f.min.css').options({
    processCssUrls: true
});

mix.copyDirectory('resources/img', 'public/img');
