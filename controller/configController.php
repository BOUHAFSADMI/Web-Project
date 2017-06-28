<?php

include "../model/connection.php";
include "../model/configModel.php";

$db=Registry::getInstance()->getDbConnection();

$configModel = new configModel($db);

if(isset($_POST['update']) && !empty($_FILES['logo']))
{
    $logo = "images/logo/".$_FILES['logo']['name'];
    $configModel->updateLogo($logo);
}
else if(isset($_POST['ajouter']) && !empty($_FILES['logo']))
{
    $logo = "images/logo/".$_FILES['logo']['name'];
    $configModel->updateLogo($logo);
}
elseif(isset($_POST['supprimer']))
{
    $configModel->delLogo();
}


header('Location: ../index.php');