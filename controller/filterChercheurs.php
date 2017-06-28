<?php

include "../model/connection.php";
include "../model/chercheurModel.php";
include "../model/chercheur.php";

$db = Registry::getInstance()->getDbConnection();
$chercheurModel = new chercheurModel($db);

$pays = $chercheurModel->getPays();
$domaines=$chercheurModel->getDomaines();


if(isset($_POST['continent']) && isset($_POST['pays']) && isset($_POST['domaine']))
{
    $coninent=$_POST['continent'];
    $pay = $_POST['pays'];
    $domaine=$_POST['domaine'];

    if(!empty($coninent) && !empty($domaine))
    {
        $res = $chercheurModel->getChercheurs($continent,$domaine);
    }
    else if(!empty($coninent))
    {
        $res = $chercheurModel->getChercheurs($coninent);
    }else if(!empty($_POST['domaine']))
    {
        $res = $chercheurModel->getChercheurs($domaine);
    }


    if(!empty($pay) && !empty($domaine))
    {
        $res = $chercheurModel->getChercheurs($pay,$domaine);
    }
    else if(!empty($pay))
    {
        $res = $chercheurModel->getChercheurs($pay);
    }else if(!empty($domaine))
    {
        $res = $chercheurModel->getChercheurs($domaine);
    }
    header('Location: ../index.php?menu=2');
}

