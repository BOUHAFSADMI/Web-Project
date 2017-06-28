<?php


class commentsModel
{
    private $dbConnection;

    function __construct(PDO $dbConnection)
    {
        $this->dbConnection=$dbConnection;
    }

    public function getComments()
    {
        $q="select * from comments";
        $res = $this->dbConnection->query($q);
        return $res->fetchAll();
    }

    public function disableComment($id)
    {
        $q="update comment set state=0 where id='".$id."'";
        $this->dbConnection->query($q);
    }

}