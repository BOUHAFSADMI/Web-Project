<?php


class journauxModel
{
    private $dbConnection;

    function __construct(PDO $dbConnection)
    {
        $this->dbConnection=$dbConnection;
    }

    public function getJournaux($offset)
    {
        $query = $this->dbConnection->prepare("select * from journal ORDER BY titre ASC LIMIT ?,3");
        $query->bindValue(1,$offset,PDO::PARAM_INT);
        $query->execute();
        $result=$query->fetchAll();
        return $result;
    }


    public function getNbrPages()
    {
        $query="select * from journal";
        $result = $this->dbConnection->query($query);
        return $result->rowCount();
    }


    public function getThemes($id)
    {

        $query="select theme.theme from theme_traitee join theme on theme_traitee.idTheme=theme.id and idJournal='".$id."'";
        $result = $this->dbConnection->query($query);
        return $result->fetchAll();
    }

}