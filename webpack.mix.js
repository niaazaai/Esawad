const mix = require('laravel-mix');
require('laravel-mix-purgecss');

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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css/new', [
//         require('postcss-import'),
//         require('tailwindcss'),
//     ])
//     .webpackConfig(require('./webpack.config'));

// mix.styles(
//     [
//         'resources/assets/css/purpose.css',
//         'resources/assets/css/class/player/flatpickr.min.css',
//         'resources/assets/css/class/player/videojs.min.css',
//         'resources/assets/css/class/player/fantasy-theme.min.css',
//         'resources/assets/css/class/player/quality-selector.css',
//         'resources/assets/css/class/player/videojs-playlist-ui.vertical.css',
//         ],'public/css/class/player/player.min.css');

    
mix.styles(
[
    // 'resources/assets/libs/@fortawesome/fontawesome-pro/css/all.min.css', 
    'resources/assets/libs/select2/dist/css/select2.min.css',
    'resources/assets/libs/flatpickr/dist/flatpickr.min.css',
    'resources/assets/css/purpose.css',
],  'public/css/cooked.css');

// mix.js('resources/js/app.js', 'public/js').purgeCss({enabled: true});



mix.scripts(
[
    'resources/assets/js/purpose.core.js',
    'resources/assets/libs/highlightjs/highlight.pack.min.js', 
    'resources/assets/libs/clipboard/dist/clipboard.min.js',
    'resources/assets/libs/select2/dist/js/select2.min.js',
    'resources/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js',
    'resources/assets/libs/autosize/dist/autosize.min.js',
    'resources/assets/libs/flatpickr/dist/flatpickr.min.js',
    'resources/assets/js/purpose.js',

],  'public/js/cooked.js');


// mix.scripts(
//     [
//         'resources/assets/js/purpose.core.js',
//         'resources/assets/js/purpose.js',
//     ],  'public/js/player.purpose.js');