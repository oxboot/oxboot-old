let mix = require('laravel-mix');

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
mix.setPublicPath("./");
mix.js('htdocs/content/themes/theme/assets/scripts/main.js', 'htdocs/content/themes/theme/dist/scripts')
  .sass('htdocs/content/themes/theme/assets/styles/main.scss', 'htdocs/content/themes/theme/dist/styles');
