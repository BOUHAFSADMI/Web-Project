<?php



class chercheurModel
{
    private $dbConnection;



    public function __construct(PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }


    public function insertChercheur($info)
    {
        try{
            $query = "INSERT INTO chercheur(nom, prenom,email,password) VALUES (\""
                . $info["nom"] . "\",\"" . $info["prenom"] ."\",\"" . $info["email"] ."\",\"" . $info["password"] . "\")";
            $this->dbConnection->query($query);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function emailExist($email)
    {
        $query="select * from chercheur where email='".$email."'";
        $res=$this->dbConnection->query($query);
        $row=$res->fetch();
        if($row!=null)
            return true;
        else
            return flase;

    }

    public function getDomaines()
    {
        $query="select * from thematique";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }

    public function getPays()
    {
        $query="select * from pays LIMIT 10";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }


    public function getChercheur($id)
    {
        $query="select * from chercheur where id='".$id."'";
        $res=$this->dbConnection->query($query);
        return $res->fetch();
    }


    public function getChercheurs()
    {
        $query="select * from chercheur";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }


     public function getChercheurs1($continent,$domaine)
     {
         $query="select * from chercheur where id=22 or id<12";
         $res=$this->dbConnection->query($query);
         return $res->fetchAll();
     }

    public function getChercheurs2($continent)
    {
        $query="select * from chercheur join pays on chercheur.idPays=pays.id join continent.nom='".$continent."'";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }

    public function getChercheurs3($domaine)
    {
        $query="select * from chercheur join thematiques_possedee.idChercheur=chercheur.id join thematique.id=thematiques_possedee.idThematique and thematique.titre'".$domaine."'";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }


    public function getChercheurs4($pays,$domaine)
    {
        $query="select * from chercheur";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }

    public function getChercheurs5($pays)
    {
        $query="select * from chercheur join pays on pays.id=chercheur.idPays and pays.nom_fr_fr='".$pays."'";
        $res=$this->dbConnection->query($query);
        return $res->fetchAll();
    }


}
