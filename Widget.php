<?php
namespace mickgeek\daslider;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * \mickgeek\daslider\Widget is a simple parallax content slider with different animations
 * for each slider element and a background parallax effect.
 *
 * @author Oleg Belostotsky <olegbelostotsky@gmail.com>
 */
class Widget extends \yii\base\Widget
{
    /**
     * @var boolean whether the [Modernizr JavaScript library](http://modernizr.com) should be registered.
     */
    public $registerModernizr = true;
    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'da-slider'];
    /**
     * @var array options for the widget. The possible options:
     *
     * - `current`: integer, a number of the current slide.
     * - `bgincrement`: integer, an increment of the background position when sliding (the parallax effect).
     * - `autoplay`: boolean, whether to display the slideshow.
     * - `interval`: integer, a duration between the transitions.
     */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->id;
        }
        if (isset($this->clientOptions['current']) && $this->clientOptions['current'] > 0) {
            $this->clientOptions['current'] = $this->clientOptions['current'] - 1;
        }

        ob_start();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $content = ob_get_clean();
        echo Html::beginTag('div', $this->options) . "\n";
        echo $content;
        echo Html::beginTag('nav', ['class' => 'da-arrows']) . "\n";
        echo Html::tag('span', '', ['class' => 'da-arrows-prev']) . "\n";
        echo Html::tag('span', '', ['class' => 'da-arrows-next']) . "\n";
        echo Html::endTag('nav') . "\n";
        echo Html::endTag('div') . "\n";

        $view = $this->view;
        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $view->registerJs("$('#{$id}').cslider({$options});");
        DaSliderAsset::register($view);
        if ($this->registerModernizr) {
            ModernizrAsset::register($view);
        }
    }
}
