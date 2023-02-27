<?php

namespace dashboard\toaster;

use yii\web\AssetBundle;

class ToasterAsset extends AssetBundle {
    public $sourcePath = '@vendor/dashboard/toaster/assets';
    public $css = [
        'css/toaster.min.css',
    ];
    public $js = [
        'js/toaster.min.js',
    ];
    public $depends = [];
}