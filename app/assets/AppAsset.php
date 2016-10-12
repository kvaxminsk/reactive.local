<?php
namespace app\assets;
use yii\web\View;
class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [

        'css/components.css',
        'css/style.css',
    ];
    public $js = [
        'js/components.js',
        'js/script.js',
        'js/scripts-old.js',
        'js/main.js',
        'http://api-maps.yandex.ru/2.1/?lang=ru_RU',

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
