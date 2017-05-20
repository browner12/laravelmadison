const {mix} = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/info.scss', 'public/css');

mix.js('resources/assets/js/app.js', 'public/js');
