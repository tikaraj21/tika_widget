<?php
namespace tikaraj21\tika_widget;

use yii\base\Widget;
use yii\helpers\Html;

class Tika extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}