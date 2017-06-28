<?php
if(file_exists("../model/chercheurModel.php") && file_exists("../model/chercheur.php") && file_exists("../model/connection.php"))
{
    include "../model/chercheurModel.php";
    include "../model/chercheur.php";
    include "../model/connection.php";
}



$db = Registry::getInstance()->getDbConnection();
$chercheurModel = new chercheurModel($db);

$pays = $chercheurModel->getPays();
$domaines=$chercheurModel->getDomaines();


if(isset($_POST['continent']) && isset($_POST['pays']) && isset($_POST['domaine']))
{
    $continent=$_POST['continent'];
    $pay = $_POST['pays'];
    $domaine=$_POST['domaine'];

    if(!empty($continent) && !empty($domaine))
    {
        $res = $chercheurModel->getChercheurs1($continent,$domaine);
    }
   else if(!empty($continent))
    {
        $res = $chercheurModel->getChercheurs($continent);
    }else if(!empty($_POST['domaine']))
    {
        $res = $chercheurModel->getChercheurs1($domaine);
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
}
else{
    $res = $chercheurModel->getChercheurs();
}









