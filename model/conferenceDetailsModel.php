<?php


class conferenceDetailsModel
{
    private $dbConnection;

    function __construct(PDO $dbConnection)
    {
        $this->dbConnection=$dbConnection;
    }


    public function getConfDetails($id)
    {
        $query="select * from conference where id ='".$id."'";
        $res=$this->dbConnection->query($query);
       return $res->fetch();
    }


    public function getOldConf($id)
    {
        $query="select * from conference where titre=(select titre from conference where id ='".$id."') order by dateDeroulement DESC LIMIT 1,100";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }
}