<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        
        // 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        '/venobox/venobox.css',
        '/menu/fonts/icomoon/style.css',
        '/owl/dist/assets/owl.carousel.min.css',
        '/menu/css/bootstrap.min.css',
        // '/css/font-awesome.min.css',
        // 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        // '/newasset/css/plugins.css',
        '/fontawesome/css/all.css',
        // '/owl/dist/assets/owl.carousel.min.css',
        // '/owl/dist/assets/owl.theme.default.min.css',
        '/css/font-awesome.min.css',
        '/menu/css/style.css',
        // '/newasset/css/style.css',
        '/css/style.css',
        '/css/style-mob.css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
    ];
    public $js = [
        // 'http://code.jquery.com/jquery-latest.min.js',
         // 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js',
        'https://code.jquery.com/jquery-2.2.4.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        '/menu/js/jquery.sticky.js',
         '/menu/js/bootstrap.min.js',
        '/menu/js/main.js',
        // 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
        // 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js',
        '/owl/dist/owl.carousel.min.js',
        // '/newasset/js/plugins.js',
        // '/newasset/js/theme.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        '/venobox/venobox.min.js',
        '/js/vanilla-tilt.min.js',
        '/js/jquery.nicescroll.min.js',
        
        
        
        //  '/js/waypoints.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js',
        '/js/custom.js',
        
      
        // 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
