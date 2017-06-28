<?php


session_start();

include "../model/connection.php";
include "../model/chercheurModel.php";

$info =[
    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"],
    "email" => $_POST["email"],
    "password" => $_POST["password"],
    "image" => null
];




$db = Registry::getInstance()->getDbConnection();
$chercheurModel = new chercheurModel($db);

if(!$chercheurModel->emailExist($info["email"])){

    $chercheurModel->insertChercheur($info);

    $_SESSION['email']=$info["email"];
    $_SESSION['password']=$info["password"];
    header('Location: ../index.php');
}
else
{
    header('Location: ../view/error.html');
}




