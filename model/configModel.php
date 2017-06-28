<?php


class configModel
{

    private $dbConnection;
    function __construct(PDO $dbConnection)
    {
        $this->dbConnection=$dbConnection;
    }


    public function getLogo()
    {
        $query="select logo.logo from logo where active=1";
        $res = $this->dbConnection->query($query);
        return $res->fetch()['logo'];
    }

    public function delLogo()
    {
        $query="update logo set active=0 where 1";
        $this->dbConnection->query($query);
    }

    public function updateLogo($logo)
    {
        $query="update logo set logo='" .$logo. "' , active=1 where 1";
        $this->dbConnection->query($query);
    }

}