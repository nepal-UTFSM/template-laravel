const mix = require('laravel-mix');

const Dotenv = require('dotenv-webpack');

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

mix.js('resources/js/app.js', 'public/js').vue();

mix.webpackConfig({
  plugins: [
    new Dotenv(),
  ],
});

mix.postCss('resources/css/app.css', 'public/css');

if (mix.inProduction()) {
  mix.version();
  mix.extract();
} else {
  mix.sourceMaps();
}
