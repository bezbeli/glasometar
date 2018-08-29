let mix = require('laravel-mix');

mix.sass('resources/assets/styles/app.scss', '2018/css');

mix.js('resources/assets/scripts/app.js', '2018/js');
mix.js('resources/assets/scripts/carousel.js', '2018/js');

// mix.copyDirectory('resources/assets/images', '2018/images');

mix.scripts([
    'resources/assets/scripts/showcomparison.js',
    'resources/assets/scripts/showmatrix.js',
    'resources/assets/scripts/calcmatrix.js'
    ],
    '2018/js/scripts.js');
