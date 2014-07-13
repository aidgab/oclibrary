<?php
/**
 * Created by PhpStorm.
 * User: Aidar
 * Date: 11.07.14
 * Time: 2:30
 */

class ActionProvider {
    public function actionIndex(){
        $findStr='';
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
                $books['bytitle']=Db::getInstance()->queryArray('SELECT b.*, a.firstname, a.lastname FROM book b LEFT JOIN autors a ON (b.id=a.idbook) WHERE title LIKE :t', array(':t'=>'%'.$findStr.'%'));
                $books['byauthor']=Db::getInstance()->queryArray('SELECT b.*, a.firstname, a.lastname FROM autors a
                        JOIN book b ON (b.id=a.idbook) WHERE (a.firstname LIKE :t) OR (a.lastname LIKE :t) OR (a.middlename LIKE :t)', array(':t'=>'%'.$findStr.'%'));

                $books['bygenre']=Db::getInstance()->queryArray('SELECT b.*, a.firstname, a.lastname, g.title as "genretitle" FROM autors a
                        JOIN book b ON (b.id=a.idbook)
                        JOIN genreitems gi ON (gi.idbook=b.id)
                        JOIN genre g ON (g.id=gi.idgenre)
                        WHERE (g.title LIKE :t)', array(':t'=>'%'.$findStr.'%'));
            }
        }
        if (ViewEngine::isAjaxRequest()) {
            header('Content-Type: application/json');
            echo json_encode($books);
        }
        else{
            ViewEngine::render('index', array(
                'books'=>$books,
                'findStr'=>$findStr
            ));
        }
    }

    public function actionAbout (){
        ViewEngine::render('about');
    }
} 