<?php

namespace beatep\sortable\assets;

use yii\web\AssetBundle;

class SortableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/beatep/yii2-sortable-widgets/assets/files';

    public $js = [
        'js/sortable-widgets.js',
    ];

    public $css = [
        'css/sortable-widgets.css',
    ];

    public $depends = [
        'beatep\sortable\assets\RubaxaAsset',
    ];
}
