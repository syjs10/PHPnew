<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use app\services\UrlService;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    // public $css      = [
    //     '/bootstrap/css/bootsrtap.min.css',
    // ];
    // public $js = [
    //     '/jquery/jquery.js',
    //     '/bootstrap/js/bootsrtap.min.js',
    // ];
    // public $depends = [

    // ];
    public function registerAssetFiles($view)
    {
        $this->css = [
            UrlService::buildUrl('/boot/css/bootstrap.min.css'),
            UrlService::buildUrl('/boot/css/dashboard.css'),

        ];
        $this->js = [
            UrlService::buildUrl('/jquery/jquery.js'),
            UrlService::buildUrl('/boot/js/bootstrap.min.js'),
        ];
        parent::registerAssetFiles($view);
    }
}
