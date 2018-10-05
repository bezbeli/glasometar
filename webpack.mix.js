const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'css');

mix.js('resources/js/app.js', 'js');
mix.js('resources/js/carousel.js', 'js');


mix.scripts([
    'resources/js/showcomparison.js',
    'resources/js/showmatrix.js',
    'resources/js/calcmatrix.js'
],
'public/js/scripts.js');

mix.copyDirectory('resources/images', 'images');
