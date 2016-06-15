<?php

namespace beatep\sortable\assets;

use yii\web\AssetBundle;

class RubaxaAsset extends AssetBundle
{
    public $sourcePath = '@vendor/beatep/yii2-sortable-widgets/assets/files';

    public $js = [
        'js/Sortable.js',
        'js/jquery.binding.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
