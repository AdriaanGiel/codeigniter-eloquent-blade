var elixir = require('laravel-elixir');

require('laravel-elixir-stylus');
require('laravel-elixir-webpack-official');
require('laravel-elixir-rollup-official');
require('laravel-elixir-browserify-official');


elixir.config.css.autoprefix.options.browsers = ['> 1%', 'Last 2 versions', 'IE 9', 'IE 8','IE 7'];

elixir(function(mix) {
    /**
     * front sass mix
     */

    mix.stylus('app.styl','./resources/assets/stylus/temp.css');


    mix.styles([
        '../bower/materialize/dist/css/materialize.css',
        '../bower/material-design-icons/iconfont/material-icons.css',
        '../bower/components-font-awesome/css/font-awesome.css',
        '../downloads/device-mockups/device-mockups/device-mockups2.min.css',
        '../bower/slick-carousel/slick/slick.css',
        '../bower/sweetalert2/dist/sweetalert2.css',
        '../bower/animate.css/animate.css',
        '../bower/hover/css/hover.css',
        '../downloads/fv_almelo/stylesheet.css',
        '../stylus/temp.css'
    ]);

    mix.scripts([
        '../bower/jquery/dist/jquery.js',
        '../bower/noty/js/noty/promise.js',
        '../bower/noty/js/noty/jquery.noty.js',
        '../bower/materialize/bin/materialize.js',
        '../bower/smoothscroll/dist/smoothscroll.js',
        '../bower/slick-carousel/slick/slick.js',
        '../bower/sweetalert2/dist/sweetalert2.js',
        '../js/init.js',
        '../js/smooth.js',
        '../js/logic.js',
        '../js/customers.js',
        '../js/slider.js',
        '../js/price.js'
    ]);

    mix.copy('resources/assets/bower/materialize/fonts/roboto','public/fonts/roboto');
    mix.copy('resources/assets/bower/components-font-awesome/fonts','public/fonts');
    mix.copy('resources/assets/downloads/device-mockups/device-mockups','public/css');
    mix.copy('resources/assets/downloads/fv_almelo/font','public/css');

    mix.copy('resources/assets/bower/material-design-icons/iconfont/MaterialIcons-Regular.woff2','public/css');
    mix.copy('resources/assets/bower/material-design-icons/iconfont/MaterialIcons-Regular.woff','public/css');
    mix.copy('resources/assets/bower/material-design-icons/iconfont/MaterialIcons-Regular.ttf','public/css');


});
