<?php
namespace app\services;

use yii\helpers\Url;

/**
 *
 */
class UrlService
{
    public static function buildUrl($url, $params = [])
    {
        return Url::toRoute(array_merge([$url], $params));
    }
    public static function buildNullUrl()
    {
        return "javascript:void(0);";
    }
}
