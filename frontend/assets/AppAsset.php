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
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Marck+Script',
        'css/site.css',
        'css/main.css',
        'css/libs.min.css',
        'css/fonts.css',
    ];
    public $js = [
        'js/libs.min.js',
        'js/common.js',
        'js/googleMap.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
