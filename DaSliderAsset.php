<?php
namespace mickgeek\daslider;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * DaSliderAsset represents a collection of asset files, such as CSS, JS, images.
 *
 * @author Oleg Belostotskiy <olgblst@gmail.com>
 */
class DaSliderAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@mickgeek/daslider/assets';
    /**
     * @inheritdoc
     */
    public $css = [
        'css/daslider.css',
    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'js/jquery.cslider.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

/**
 * This asset bundle provides the [Modernizr JavaScript library](http://modernizr.com).
 *
 * @author Oleg Belostotskiy <olgblst@gmail.com>
 */
class ModernizrAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@mickgeek/daslider/assets';
    /**
     * @inheritdoc
     */
    public $js = [
        'js/modernizr.custom.js',
    ];
    /**
     * @inheritdoc
     */
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
