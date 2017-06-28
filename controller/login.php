<?php

session_start();
include "../model/connection.php";
include "../model/userModel.php";


if(isset($_POST["email"]) && isset($_POST["password"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($_POST["email"]) && !empty($_POST["password"]))
    {
        $db = Registry::getInstance()->getDbConnection();
        $userModel = new userModel($db);
        $user = $userModel->getUser($email,$password);

        if($user!=null)
        {
            $_SESSION["email"]= $user->getLogin();
            $_SESSION["password"]= $user->getPass();
        }
    }
}

header('Location: ../index.php');