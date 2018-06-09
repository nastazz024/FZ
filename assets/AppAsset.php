<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://fonts.googleapis.com/css?family=Oswald:400,500,600,700",
        "https://fonts.googleapis.com/css?family=Varela+Round",
        "https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i",
        "https://use.fontawesome.com/releases/v5.0.10/css/all.css",
        "css/icomoon.css",
        "css/jquery.formstyler.css",
		"css/jquery.custom-scroll.css",
        "css/jquery.formstyler.theme.css",
        "https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css",
        "css/style.css"		
    ];

    public $js = [
	
        'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',
        "js/dm-tabs.js",
        "js/jquery-3.2.1.min.js",
        "https://code.jquery.com/ui/1.12.1/jquery-ui.js",
        "js/jquery.custom-scroll.min.js",
		"js/jquery.formstyler.min.js",
        "js/custom.js",
        "js/catalog.js",
		
    ];

    public $depends = [
        
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
    
}
