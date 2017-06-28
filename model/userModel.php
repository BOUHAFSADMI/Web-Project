<?php

include "../model/user.php";

class userModel
{
    private $dbConnection;

    public function __construct(PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function insertUser($userName,$nom,$prenom,$email,$password)
    {
        try{
            $query = "INSERT INTO user(nom, prenom,email,password) VALUES (\"" . $userName ."\",\"" . $nom . "\",\"" . $prenom ."\",\"" . $email ."\",\"" . $password . "\")";
            $this->dbConnection->query($query);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    public function getUser($email,$password)
    {
        $query="SELECT * FROM prodb.chercheur where email='".$email."'and password='".$password."'";
        $result = $this->dbConnection->query($query);
        $row = $result->fetch();
        if($row!=null)
            return $user = new user($row['email'],$row['password']);
        else
            return null;
    }

}

