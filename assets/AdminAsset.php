<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/font-awesome.min.css',
        'css/bootstrap.min.css',
        'css/custom.min.css',
        // 'web/css/bootstrap.css',
        // "web/css/dataTables.bootstrap.min.css",
        // "web/css/buttons.bootstrap.min.css",
        // "web/css/fixedHeader.bootstrap.min.css",
        // "web/css/responsive.bootstrap.min.css",
        // "web/css/scroller.bootstrap.min.css",
    ];
    public $js = [
        'js/custom.min.js',
        'js/bootstrap.min.js',
        'js/jquery.min.js',

        // "web/js/jquery.dataTables.min.js",
        // "web/js/dataTables.bootstrap.min.js",
        // "web/js/jquery.dataTables.min.js",
        // "web/js/dataTables.bootstrap.min.js",
    ];
    public $depends =[
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
