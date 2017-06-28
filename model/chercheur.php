<?php


class chercheur{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $image;
    private $fonction;
    private $grade;
    private $biographie;
    private $cvitae;
    private $idStructure;
    private $idPays;

    function __construct($id,$nom,$prenom,$email,$password,$image,$fonction,$grade,$biographie,$cvitae,$idStructure,$idPays)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->password=$password;
        $this->image=$image;
        $this->fonction=$fonction;
        $this->grade=$grade;
        $this->biographie=$biographie;
        $this->cvitae=$cvitae;
        $this->idStructure=$idStructure;
        $this->idPays=$idPays;
    }

    public function getId()
    {
        return $this->id;
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getFonction()
    {
        return $this->fonction;
    }
    public function getGrade()
    {
        return $this->grade;
    }
    public function getBiographie()
    {
        return $this->biographie;
    }
    public function getCvitae()
    {
        return $this->cvitae;
    }

    public function getStructure()
    {
        return $this->idStructure;
    }
    public function getPays()
    {
        return $this->idPays;
    }


    public function setImage($image)
    {
        $this->image=$image;

    }
}