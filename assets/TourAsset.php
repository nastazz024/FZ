<?php

namespace app\assets;

use yii\web\AssetBundle;


class TourAsset extends AppAsset
{
    public function init()
    {
        parent::init();

        $this->js = array_merge($this->js, [
            "/js/moment.min.js",
            "/js/daterangepicker.js",
        ]);

        $this->css = array_merge($this->js, [
            "/css/daterangepicker.css",
        ]);
    }

    public $depends = [
        'app\assets\AppAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
