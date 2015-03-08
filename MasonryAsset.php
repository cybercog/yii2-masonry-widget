<?php

/**
 * Masonry Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\masonry;

use yii\web\AssetBundle;

class MasonryAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-masonry/dist';
    public $css = [];
    public $js = ['masonry.pkgd.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
