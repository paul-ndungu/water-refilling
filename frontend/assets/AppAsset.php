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
        //'css/site.css',
        
        'assets/theme/plugins/fontawesome-free/css/all.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'assets/theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'asssets/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'assets/theme/plugins/jqvmap/jqvmap.min.css',
        'assets/theme/css/adminlte.min.css',
        
        'assets/theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'assets/theme/plugins/daterangepicker/daterangepicker.css',
        'assets/theme/plugins/summernote/summernote-bs4.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    ];
    public $js = [
        
        'assets/theme/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'assets/theme/plugins/chart.js/Chart.min.js',
        'assets/theme/plugins/sparklines/sparkline.js',
        'assets/theme/plugins/jqvmap/jquery.vmap.min.js',
        'assets/theme/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'assets/theme/plugins/jquery-knob/jquery.knob.min.js',
        'assets/theme/plugins/moment/moment.min.js',
        'assets/theme/plugins/daterangepicker/daterangepicker.js',
        'assets/theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'assets/theme/plugins/summernote/summernote-bs4.min.js',
        'assets/theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'assets/theme/js/adminlte.js',
        'assets/theme/js/pages/dashboard.js',
        'assets/theme/js/demo.js',
       
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
