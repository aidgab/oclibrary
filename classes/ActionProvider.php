<?php
/**
 * Created by PhpStorm.
 * User: Aidar
 * Date: 11.07.14
 * Time: 2:30
 */

class ActionProvider {
    public function actionIndex(){
        $books=null;
        if (isset($_GET['find'])){
            $findStr=trim($_GET['find']);
            if (!$findStr){
                $books=array();
            }
            else{
                $books=Db::getInstance()->queryArray('SELECT * FROM book WHERE title LIKE :t', array(':t'=>'%'.$_GET['find'].'%'));
            }
        }
        ViewEngine::render('index', array(
            'books'=>$books
        ));
    }

    public function actionAbout (){
        ViewEngine::render('about');
    }
} 