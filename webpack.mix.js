const mix = require('laravel-mix');
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

mix
    .styles('resources/views/admin/assets/css/bootstrap.min.css', 'public/front/assets/css/bootstrap.min.css')
    .styles('resources/views/admin/assets/css/dataTables.bootstrap4.min.css', 'public/front/assets/css/dataTables.bootstrap4.min.css')
    .styles('resources/views/admin/assets/css/typography.css', 'public/front/assets/css/typography.css')
    .styles('resources/views/admin/assets/css/style.css', 'public/front/assets/css/style.css')
    .styles('resources/views/admin/assets/css/responsive.css', 'public/front/assets/css/responsive.css')



    .scripts(['resources/views/admin/assets/js/jquery.min.js'], 'public/front/assets/js/jquery.js')
    .scripts(['resources/views/admin/assets/js/popper.min.js'], 'public/front/assets/js/popper.js')
    .scripts(['resources/views/admin/assets/js/bootstrap.min.js'], 'public/front/assets/js/bootstrap.min.js')
    .scripts(['resources/views/admin/assets/js/jquery.appear.js'], 'public/front/assets/js/jquery.appear.js')
    .scripts(['resources/views/admin/assets/js/countdown.min.js'], 'public/front/assets/js/countdown.js')
    .scripts(['resources/views/admin/assets/js/waypoints.min.js'], 'public/front/assets/js/waypoints.js')
    .scripts(['resources/views/admin/assets/js/jquery.counterup.min.js'], 'public/front/assets/js/jquery.counterup.js')
    .scripts(['resources/views/admin/assets/js/wow.min.js'], 'public/front/assets/js/wow.js')
    .scripts(['resources/views/admin/assets/js/select2.min.js'], 'public/front/assets/js/select2.js')
    .scripts(['resources/views/admin/assets/js/slick.min.js'], 'public/front/assets/js/slick.js')
    .scripts(['resources/views/admin/assets/js/owl.carousel.min.js'], 'public/front/assets/js/owl.carousel.min.js')
    .scripts(['resources/views/admin/assets/js/jquery.magnific-popup.min.js'], 'public/front/assets/js/jquery.magnific-popup.js')
    .scripts(['resources/views/admin/assets/js/smooth-scrollbar.js'], 'public/front/assets/js/smooth-scrollbar.js')
    .scripts(['resources/views/admin/assets/js/chart-custom.js'], 'public/front/assets/js/chart-custom.js')
    .scripts(['resources/views/admin/assets/js/flatpickr.min.js'], 'public/front/assets/js/flatpickr.min.js')
    .scripts(['resources/views/admin/assets/js/jquery.min.js'], 'public/front/assets/js/jquery.js')
    .scripts(['resources/views/admin/assets/js/jquery.form.js'], 'public/front/assets/js/jquery.form.js')
    .scripts(['resources/views/admin/assets/js/jquery.mask.js'], 'public/front/assets/js/jquery.mask.js')
    .scripts(['resources/views/admin/assets/js/custom.js'], 'public/front/assets/js/custom.js')

    .scripts([
        'resources/views/admin/assets/js/login.js'
    ], 'public/front/assets/js/login.js')

    .copyDirectory('resources/views/admin/assets/fonts', 'public/front/assets/fonts')
    .copyDirectory('resources/views/admin/assets/images', 'public/front/assets/img')

    .options({
        processCssUrls: false
    })

    .version();

