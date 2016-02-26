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
    mix.sass('app.scss')
    .scripts(
    	'app.js',
    	'public/js/app.js'
    )
    .copy(
        'bower_components/jquery/dist/jquery.js',
        'public/js/jquery.js'
    )
    .copy(
    	'bower_components/jquery/dist/jquery.min.js',
    	'public/js/jquery.min.js'
	)
	.copy(
    	'bower_components/jquery/dist/jquery.min.map',
    	'public/js/jquery.min.map'
	)
    .copy(
        'bower_components/Chart.js/Chart.js',
        'public/js/chart.js'
    )
    .copy(
        'bower_components/fancybox/source/jquery.fancybox.css',
        'public/css/jquery.fancybox.css'
    )
    .copy(
        'bower_components/fancybox/source/jquery.fancybox.js',
        'public/js/jquery.fancybox.js'
    )
    .copy(
        'bower_components/fancybox/source/jquery.fancybox.pack.js',
        'public/js/jquery.fancybox.pack.js'
    )
    .copy(
        'bower_components/fancybox/lib/jquery.mousewheel-3.0.6.pack.js',
        'public/js/jquery.mousewheel-3.0.6.pack.js'
    )
    .version('public/css/app.css');
});
