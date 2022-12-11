// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/js/input.js', 'public/assets/js/script.js').postCss('src/css/input.css', 'public/assets/css/style.css', [
    require("tailwindcss"),
    require("autoprefixer"),
]);