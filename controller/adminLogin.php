<?php

session_start();
include "../model/connection.php";
include "../model/adminModel.php";


if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
        $db = Registry::getInstance()->getDbConnection();
        $adminModel = new adminModel($db);
        $admin = $adminModel->getAdmin($username,$password);

        if($admin!=null)
        {
            $_SESSION["username"]= $username;
            $_SESSION["password"]= $password;
        }
    }
}

header('Location: ../index.php');