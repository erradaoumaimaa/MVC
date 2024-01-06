<?php


class Database{
    public static $instance;
    // on declare un constructor sans parametres creer par défaut :
    public function __construct()
  {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $pdo=new PDO($dsn,DB_USER,DB_PASS);
    }


    public static function getInstance(){
        // on a pas une instance donc il faut le creer self 
        if(self::$instance == null){
            // OR self::$instance = new self();
            self::$instance = new Database;
    }
    return self::$instance;
}
}
