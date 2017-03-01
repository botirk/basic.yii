<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\oneui\widgets;

class Portlet extends \yii\base\Widget {
    
    public $title = "default title";
    public $headercss = '';
    public $portletcss = '';
    
    function run() {
        OneuiAssetBundle::register($this->getView());
        echo '<div class="block '.$this->portletcss.'">';
        echo '<div class="block-header '.$this->headercss.'"><h3 class="block-title">'.$this->title.'</h3></div>';
        echo '<div class="block-content">';
    }
    
    static function end() {
        echo '</div></div>';
    }
}
