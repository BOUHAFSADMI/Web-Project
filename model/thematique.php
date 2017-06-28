<?php

/**
 * Created by PhpStorm.
 * User: DarkSnow
 * Date: 01/14/2017
 * Time: 5:23 PM
 */
class thematique
{

    private $id;
    private $titre;

    function __construct($id,$titre)
    {
        $this->id=$id;
        $this->titre=$titre;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitre()
    {
        return $this->titre;
    }


}