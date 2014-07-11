<?php
/**
 * Created by PhpStorm.
 * User: Aidar
 * Date: 11.07.14
 * Time: 11:46
 */

//Соединение с БД у нас будет синглетоном

class Db {

    private $_dbh; //PDO obj
    private static $_instance;
    private function __construct(){}
    private function __clone()    {}

    public static function getInstance() {
        if ( empty(self::$_instance) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Установка параметров и подключение к базе
     * @param $dsn
     * @param null $user
     * @param null $password
     */
    public function setCredentialsAndConnect($dsn, $user=null, $password=null){
        try{
            $this->_dbh=new PDO($dsn, $user, $password);
        }
        catch (PDOException $e) {
            echo "Database error occured<br/>";
            die();
        }
    }

    public function queryArray($query, $params=array()){
        try {
            $stmt = $this->_dbh->prepare($query);
            foreach ($params as $param=>$val){
                $stmt->bindParam($param, $val);
            }
            if ($stmt->execute()){
                return $stmt->fetchAll();
            }

            return array();
        }
        catch (PDOException $e) {
            echo "Database error occured<br/>";
            die();
        }
    }
}