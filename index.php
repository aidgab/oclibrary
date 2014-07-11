<?php
/**
 * Проект "Поиск для библиотеки. Тестовое задание Online Consultant"
 * Created by PhpStorm.
 * User: Aidar
 */

//require_once('./classes/ViewEngine.php');
//require_once('./classes/ActionProvider.php');

//замутим автозагрузку классов, чтобы не плодить подключения классов
function __autoload($class_name) {
    require_once './classes/'.$class_name.'.php';
}

//инициализируем базу
Db::getInstance()->setCredentialsAndConnect('mysql:host=localhost;dbname=oclibrary','root','');

//роут тут является экшеном на самом деле - в контроллера смысла нет
$route=(isset($_GET['route']) && $_GET['route']) ? $_GET['route'] : 'index';

$actionProvider=new ActionProvider();
$funcName='action'.$route;
$actionProvider->$funcName();