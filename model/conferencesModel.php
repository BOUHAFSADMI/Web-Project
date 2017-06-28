<?php




class conferencesModel
{
    private $dbConnection;

    function __construct(PDO $dbConnection)
    {
        $this->dbConnection=$dbConnection;
    }


    public function getConferences($date)
    {
        $query="select * from conference where dateDeroulement <'".$date."' order by dateSoumission,dateDeroulement,titre DESC";
        $result=$this->dbConnection->query($query);
        return $result->fetchAll();
    }
}
