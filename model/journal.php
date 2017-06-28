<?php


class journal
{
    private $id;
    private $titre;
    private $isbn;
    private $impact;
    private $themes;
    private $site;


    function __construct($id,$titre,$isbn,$impact,$themes,$site)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->isbn=$isbn;
        $this->impact=$impact;
        $this->themes=$themes;
        $this->site=$site;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }
    public function getImpact()
    {
        return $this->impact;
    }

    public function getThemes()
    {
        return $this->themes;
    }

    public function getSite()
    {
        return $this->site;
    }
}