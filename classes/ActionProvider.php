<?php
/**
 * Created by PhpStorm.
 * User: Aidar
 * Date: 11.07.14
 * Time: 2:30
 */

class ActionProvider {
    public function actionIndex(){
        ViewEngine::render('index', array(
            'genres'=>Db::getInstance()->queryArray('SELECT * FROM genre')
        ));
    }

    public function actionAbout (){
        ViewEngine::render('about');
    }
} 