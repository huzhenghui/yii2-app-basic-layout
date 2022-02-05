<?php

namespace huzhenghui\yii2\app_basic\layout\assets;

use app\assets\AppAsset as AppAppAsset;

class AppAsset extends AppAppAsset
{
    public $sourcePath = '@vendor/yiisoft/yii2-app-basic/web/css';
    public $baseUrl = null;
    public $css = [
        'site.css',
    ];
}
