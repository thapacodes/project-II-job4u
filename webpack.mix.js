const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/')
.sass('resources/sass/main.scss', 'public/css/');


mix.browserSync(
    {
        proxy: 'http://127.0.0.1:8000'
    }
);