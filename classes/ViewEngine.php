<?php
/**
 * Created by PhpStorm.
 * User: Aidar
 * Date: 11.07.14
 * Time: 1:17
 */

class ViewEngine {
    public static function render ($view, $params=array(), $layout='main'){
        extract($params);//распарсим массив на переменные
        ob_start();
        include('views/'.$view.'.php');
        $content=ob_get_contents();
        ob_clean();
        include('views/layouts/'.$layout.'.php');
    }
}