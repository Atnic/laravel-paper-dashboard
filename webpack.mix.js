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

mix.js('resources/assets/js/app.js', 'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css');

mix.autoload({
  jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
});

mix.js('resources/assets/js/paper-dashboard.js', 'public/js')
  .sass('resources/assets/sass/paper-dashboard.scss', 'public/css');

mix.js('resources/assets/js/auth.js', 'public/js')
  .sass('resources/assets/sass/auth.scss', 'public/css');

mix.extract([
  'axios',
  'bootstrap',
  'bootstrap-notify',
  'bootstrap-sass',
  'jquery',
  'lodash',
  'perfect-scrollbar/src/js/adaptor/jquery',
  'popper.js',
  'vue',
], 'public/js/vendor.js');

mix.version();

mix.setPublicPath('public');
