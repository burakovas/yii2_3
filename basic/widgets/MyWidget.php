<?php
/**
 * Created by PhpStorm.
 * User: burakovas
 * Date: 2018-12-26
 * Time: 16:44
 */

namespace app\widgets;
use yii\base\Widget;

class MyWidget extends Widget
{
    public $label = "Нажми меня!!!";
    public function run(){
        return "<button class='btn btn-success'>{$this->label}</button>";
    }
}