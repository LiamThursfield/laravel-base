const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');


mix.js('resources/js/app.js', 'public/js').version();

mix.postCss('resources/css/app.css', 'public/css')
    .options({
        autoprefixer: true,
        postCss: [
            require('postcss-import'),
            require('postcss-nested'),
            tailwindcss('./tailwind.config.js')
        ]
    }).version();

mix.postCss('resources/css/admin.css', 'public/css')
    .options({
        autoprefixer: true,
        postCss: [
            require('postcss-import'),
            require('postcss-nested'),
            tailwindcss('./tailwind.config.js')
        ]
    }).version();