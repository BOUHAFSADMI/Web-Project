<?php
class Registry{
    private $dbConnection;
    public static $registry;
    
    public function __construct()
    {
        try {
            $pdo_option[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            $this->dbConnection= new PDO('mysql:host=localhost;dbname=prodb', 'root', '');
        }
        catch(Exception $ex){
            Die("connection to DataBase failed");
        }
    }
    
    public static function getInstance(){
        if(Registry::$registry==null)
            $registry=new Registry();
        return $registry;
    }
    
    public function getDbConnection()
    {
        return $this->dbConnection;
    }
}

?>