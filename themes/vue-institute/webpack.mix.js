let mix = require('laravel-mix');

mix.options({
        processCssUrls: false,
        autoprefixer: {
            enabled: true,
            options: {
                overrideBrowserslist: ['last 2 versions', '> 1%'],
                cascade: true,
                grid: true,
            }
        },
    })
    .setPublicPath('/')
    .sass('src/scss/app.scss', 'src/frontend/css/styles.css')
    .js('src/js/app.js', 'src/frontend/js/scripts.js')
    .version();

    mix.combine([
        'src/frontend/css/bootstrap.min.css',
        'src/frontend/css/animate.css',
        'src/frontend/css/font-awesome.css',
        'src/frontend/css/themify-icons.css',
        'src/frontend/css/flaticon.css',
        'src/frontend/css/slick.css',
        'src/frontend/css/prettyPhoto.css',
        'src/frontend/css/shortcodes.css',
        'src/frontend/css/megamenu.css',
        'src/frontend/css/responsive.css',
        'src/frontend/css/main.css',
    
    
    
    ], 'assets/css/combined.css')
    
    
    mix.combine([
         'src/frontend/js/jquery.min.js',
        'src/frontend/js/tether.min.js',
        'src/frontend/js/bootstrap.min.js',
        'src/frontend/js/jquery.easing.js',
        'src/frontend/js/jquery-waypoints.js',
        'src/frontend/js/jquery-validate.js',
        'src/frontend/js/jquery.prettyPhoto.js',
        'src/frontend/js/slick.min.js',
        'src/frontend/js/numinate.min.js',
        'src/frontend/js/imagesloaded.min.js',
        'src/frontend/js/lazysizes.min.js',
        'src/frontend/js/main.js',
        'src/frontend/js/jquery-isotope.js'
    
    ], 'assets/js/combined.js')
    
    