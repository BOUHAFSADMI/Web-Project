<?php
class publication{
    private $id;
    private $titre;
    private $date;
    private $contenu;
    private $auteur;
    private $thematique;
    
    public function __construct($id,$titre,$date,$contenu,$auteur,$thematique)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->date=$date;
        $this->contenu=$contenu;
        $this->auteur=$auteur;
        $this->thematique=$thematique;


    }
    
    public function getId()
    {
        return $this->id;
    }
    
    
    public function getTitre()
    {
        return $this->titre;
    }

    public function getDate()
    {
        return $this->date;
    }
    
    public function getContenu()
    {
        return $this->contenu;
    }
    
     public function getAuteur()
    {
        return $this->auteur;
    }

    public function getThematique()
    {
        return $this->thematique;
    }

    
    
}