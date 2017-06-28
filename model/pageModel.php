<?php


class pageModel
{
    private $dbConnection;

    function __construct(PDO $dbConnection)
    {
        $this->dbConnection=$dbConnection;
    }

    public function changeColor($page,$color)
    {
        $query="update coleur set coleurFond='".$color."' where page='".$page."'";
        $this->dbConnection->query($query);
    }


    public function getColor($page)
    {
        $query="select coleurFond from coleur where page='".$page."'";
        $res=$this->dbConnection->query($query);
        return $res->fetch()['coleurFond'];
    }


    public function disableMenu($page)
    {
        $query="update coleur set Menu=0 where page='".$page."'";
        $this->dbConnection->query($query);
    }

    public function enableMenu($page)
    {
        $query="update coleur set Menu=1 where page='".$page."'";
        $this->dbConnection->query($query);
    }


    public function isEnabled($page)
    {
        $query="select Menu from coleur where page='".$page."'";
        $res = $this->dbConnection->query($query);
        $menu = $res->fetch();
        if($menu['Menu']==0)
            return false;
        else
            return true;

    }
}