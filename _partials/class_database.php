<?php


class Database{


    public $_connection;

    public static $_instance;

     function __construct()
     {
         $this->_connection = new mysqli('localhost' , 'root' , '' , 'Mybook');
     }

     public function getConnection(){
         return $this->_connection;
     }

     public static function getInstance(){
         if(Database::$_instance == null){
             Database::$_instance = new Database;
         }
         return Database::$_instance;

     }
}
?>