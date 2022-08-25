<?php

namespace ramprasadm1986\flatbed\assets;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@ramprasadm1986/flatbed/assets/src';
    
    public $css = [
        'css/bootstrap-reset.css',
        'css/slidebars.css',
        'css/style.css',
        'css/style-responsive.css',
    ];
    
    public $js = [
        'js/jquery.dcjqaccordion.2.7.js',
        'js/jquery.scrollTo.min.js',
        'js/slidebars.min.js',
        'js/jquery.nicescroll.js',
        'js/respond.min.js',
        'js/common-scripts.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',       
    ];
}
