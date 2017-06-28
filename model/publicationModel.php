<?php

class publicationModel{
    
    private $dbConnection;
    
    public function __construct(PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;    
    }
    
    
    public function getAllPub()
    {

        $queryStr="SELECT * FROM publication ORDER BY publication.date ,publication.idThematique ASC";
        $result = $this->dbConnection->query($queryStr);
        return $result->fetchAll();
    }
}
    
