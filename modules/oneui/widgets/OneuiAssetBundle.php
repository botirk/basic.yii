<?php

namespace app\modules\oneui\widgets;

use yii\web\AssetBundle;

class OneuiAssetBundle extends AssetBundle {
    public $sourcePath = '@app/modules/oneui/assets';
    public $js = ['oneui.min.js'];
    public $css = ['oneui.min.css'];
    public $depends = ['yii\bootstrap\BootstrapAsset'];
}
