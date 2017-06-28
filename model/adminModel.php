<?php



class adminModel
{
    private $dbConnection;

    function __construct(PDO $dbConnection)
    {
        $this->dbConnection=$dbConnection;
    }


    public function getAdmin($username,$password)
    {
        $query="select * from user where userName='".$username."' and password='".$password."'";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }
}