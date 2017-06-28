<?php

/**
 * Created by PhpStorm.
 * User: DarkSnow
 * Date: 01/14/2017
 * Time: 5:22 PM
 */
class pays
{

    private $id;
    private $alph2;
    private $nom_fr_fr;

    function __construct($id,$alph2,$nom_fr_fr)
    {
        $this->id=$id;
        $this->alph2=$alph2;
        $this->nom_fr_fr=$nom_fr_fr;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getAlpha()
    {
        return $this->alph2;
    }

    public function getNom()
    {
        return $this->nom_fr_fr;
    }
}