<?php

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $css = [
        "css/admin.css",
    ];

    public $js = [
        "js/admin.js",
    ];

    public $depends = [
        'app\assets\AppAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
