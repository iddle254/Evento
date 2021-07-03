const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps();

mix.styles(
    ["public/css/application-bold.css", "public/css/toolkit-bold.css"],
    "public/css/libs.css"
);
mix.scripts(
    ["public/js/application.js", "public/js/toolkit.js"],
    "public/js/libs.js"
);
