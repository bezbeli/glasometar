let mix = require('laravel-mix');

mix.sass('resources/assets/styles/app.scss', '2018/css')
    .js('resources/assets/scripts/app.js', '2018/js');

mix.copyDirectory('resources/assets/images', '2018/images');
