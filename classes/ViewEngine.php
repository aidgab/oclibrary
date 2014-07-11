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

    /**
     * Обезапасивает выдачу пользователю через htmlspecialchars
     * @param $text
     * @return string
     */
    public static function encodeChars($text){
        return htmlspecialchars($text,ENT_QUOTES);
    }

    /**
     * Создаёт ссылку
     * @param $text
     * @param $route
     * @param array $params
     * @return string
     */
    public static function link($text, $route, $params=array()){
        $href='index.php?route='.$route;
        foreach ($params as $param=>$val){
            $href.='&'.$param.'='.urlencode($val);
        }
        return '<a href="'.$href.'">'.$text.'</a>';
    }
}