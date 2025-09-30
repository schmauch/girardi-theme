<?php

namespace schmauch\girardi\assets;

use yii\web\AssetBundle;

class GirardiAssets extends AssetBundle
{
    //public $sourcePath = '@vendor/schmauch/girardi-theme/assets';
    public $basePath = '@vendor/schmauch/girardi-theme/assets';
    public $baseUrl  = '@web/themes/girardi-theme/assets';
    public $css = [
        'css/site.css',
        ['css/print.css', 'media' => 'print'],
    ];
    public $js  = [];
    public $depends = [];
    public $jsOptions = [];
}