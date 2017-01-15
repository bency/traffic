var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts('observation.js');
    mix.scripts('app.js');
    mix.version(['public/css/app.css', 'public/js/app.js', 'public/js/observation.js']);
    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/', 'public/fonts/');
    mix.copy('node_modules/c3/c3.min.css', 'public/css/');
    mix.copy('node_modules/c3/c3.min.js', 'public/js/');
    mix.copy('node_modules/d3/d3.min.js', 'public/js/');
});
