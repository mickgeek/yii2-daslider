DA Slider
=========

DA Slider is a simple parallax content slider for the Yii 2 framework with different animations for each slider element and a background parallax effect.

![Screenshot](https://cloud.githubusercontent.com/assets/8091481/3921610/fd69a838-23c2-11e4-8eb1-643db669bd03.gif)

[Real Demo]

Installation
------------

You can install the widget in two ways, using [Composer] or by downloading an archive file.

### Installing via Composer

Run the following commands under your application folder:

```
php composer.phar require --prefer-dist "mickgeek/yii2-daslider *"
```

> Note: You can just do `composer update --prefer-dist` if pre-adding the following to `require` section of your `composer.json`:
>
>     "mickgeek/yii2-daslider": "*"
>

### Installing from an Archive File

Download the [archive file], unpack it to `path/to/app/vendor/mickgeek` folder and modify the main configuration file like this:

```php
$vendorDir = dirname(__DIR__) . '/vendor';

return [
    'vendorPath' => $vendorDir,
    'extensions' => array_merge(
        require($vendorDir . '/yiisoft/extensions.php'),
        [
            'mickgeek/yii2-daslider' => [
                'name' => 'mickgeek/yii2-daslider',
                'version' => '9999999-dev',
                'alias' => [
                    '@mickgeek/daslider' => $vendorDir . '/mickgeek/yii2-daslider',
                ],
            ],
        ]
    ),
    ...
];
```

where `$vendorDir` is the path to the directory that stores vendor files.

Usage
-----

```php
use yii\helpers\Html;
use mickgeek\daslider\Widget as DaSlider;

<?php DaSlider::begin([
    'clientOptions' => ['bgincrement' => 10, 'interval' => 3000],
]); ?>
    <div class="da-slide">
        <h2>Opera</h2>
        <p>Opera is a web browser developed by Opera Software. The latest version currently runs on Microsoft Windows and OS X operating systems and uses the Blink layout engine.</p>
        <?= Html::a('Read more', '#', ['class' => 'da-link btn btn-default btn-lg']) ?>

        <div class="da-img">
            <?= Html::img('/img/1.png', ['alt' => 'Opera']) ?>
        </div>
    </div>
    <div class="da-slide">
        <h2>CloneDVD</h2>
        <p>CloneDVD is a proprietary DVD cloning software, developed by Elaborate Bytes, that can be used to make backup copies of any DVD movie not copy-protected.</p>
        <?= Html::a('Read more', '#', ['class' => 'da-link btn btn-default btn-lg']) ?>

        <div class="da-img">
            <?= Html::img('/img/2.png', ['alt' => 'CloneDVD']) ?>
        </div>
    </div>
<?php DaSlider::end(); ?>
```

Widget Properties
-----------------

  - `registerModernizr`: *boolean*, whether the [Modernizr JavaScript library] should be registered.

  - `options`: *array*, the HTML attributes for the widget container tag. See [renderTagAttributes()] for details on how attributes are being rendered.

  - `clientOptions`: *array*, the options for the widget. Possible options:
    - current: integer, a number of current slide.
    - bgincrement: integer, an increment the background position (parallax effect) when sliding.
    - autoplay: boolean, whether to display the slideshow.
    - interval: integer, a time between transitions.

License
-------

This extension is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

[Real Demo]:http://tympanus.net/Development/ParallaxContentSlider/index2.html
[Composer]:https://getcomposer.org
[archive file]:https://github.com/mickgeek/yii2-daslider/archive/master.zip
[Modernizr JavaScript library]:http://modernizr.com
[renderTagAttributes()]:http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#renderTagAttributes()-detail
