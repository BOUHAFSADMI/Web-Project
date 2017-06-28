<?php

/**
 * Created by PhpStorm.
 * User: DarkSnow
 * Date: 01/17/2017
 * Time: 7:13 PM
 */
class conference
{


    private  $array = array(
        "id"=>"id",
        "titre"=>"titre",
        "dateSoumission"=>"dateSoumission",
        "dateDeroulement"=>"dateDeroulement",
        "contenu"=>"contenu",
        "idChercheur"=>"idChercheur",
        "l1"=> "l1",
        "l2" =>"l2"
    );




    function __construct($array)
    {
        foreach ($this->array as $key => $value)
            $this->array[$key] = $array[$key];

    }

    public function getId()
    {
        return $this->array['id'];
    }
    public function getTitre()
    {
        return $this->array['titre'];
    }

    public function getContenu()
    {
        return $this->array['contenu'];
    }

    public function getDateSoumission()
    {
        return $this->array['dateSoumission'];
    }

    public function getDateDeroulement()
    {
        return $this->array['dateDeroulement'];
    }

    public function getChercheur()
    {
        return $this->array['idChercheur'];
    }

    public function getL1()
    {
        return $this->array['l1'];
    }

    public function getL2()
    {
        return $this->array['l2'];
    }
}