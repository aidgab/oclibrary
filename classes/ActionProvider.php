<?php
/**
 * Created by PhpStorm.
 * User: Aidar
 * Date: 11.07.14
 * Time: 2:30
 */

class ActionProvider {
    public function actionIndex(){
        $books=array(
            'bytitle'=>null,
            'byauthor'=>null,
            'bygenres'=>null
        );
        if (isset($_GET['find'])){
            $findStr=trim($_GET['find']);
            if (!$findStr){
                $books=array('bytitle'=>array(),'byauthor'=>array(),'bygenres'=>array());
            }
            else{
                $books['bytitle']=Db::getInstance()->queryArray('SELECT * FROM book WHERE title LIKE :t', array(':t'=>'%'.$_GET['find'].'%'));
                $books['byauthor']=Db::getInstance()->queryArray('SELECT b.* FROM authors a
                        WHERE (firstname LIKE :t) OR (lastname LIKE :t) OR (middlename LIKE %t) JOIN book b ON (b.id=a.idbook) LIKE :t', array(':t'=>'%'.$_GET['find'].'%'));
            }
        }
        ViewEngine::render('index', array(
            'books'=>$books,
            'findStr'=>$findStr
        ));
    }

    public function actionAbout (){
        ViewEngine::render('about');
    }
} 