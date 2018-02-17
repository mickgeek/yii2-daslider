Delayed Animation Slider
========================

Delayed Animation Slider is a simple content slider for the Yii 2 framework with animations for each slider element and the background parallax effect.

![Screenshot](https://cloud.githubusercontent.com/assets/8091481/3921610/fd69a838-23c2-11e4-8eb1-643db669bd03.gif)

[Real Demo]

Installation
------------

You can install the widget using [Composer]. Just run the following command under your application folder:

```
php composer.phar require --prefer-dist mickgeek/yii2-daslider
```

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

  - `clientOptions`: *array*, options for the widget. The possible options:
    - `current`: integer, a number of the current slide.
    - `bgincrement`: integer, an increment of the background position when sliding (the parallax effect).
    - `autoplay`: boolean, whether to display the slideshow.
    - `interval`: integer, a duration between the transitions.

License
-------

This extension is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

[Real Demo]:http://tympanus.net/Development/ParallaxContentSlider/index2.html
[Composer]:https://getcomposer.org
[Modernizr JavaScript library]:http://modernizr.com
[renderTagAttributes()]:http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#renderTagAttributes()-detail
