<?php


include "../model/connection.php";
include "../model/pageModel.php";


$db = Registry::getInstance()->getDbConnection();
$pageModel = new pageModel($db);
if(isset($_GET['pages']) && isset($_GET['fond']))
{
    $page=$_GET['pages'];
    $color=$_GET['fond'];
    $pageModel->changeColor($page,$color);
    print_r("hi 1");
}
else if(isset($_GET['menu']))
{
    $page=$_GET['menu'];
    if(!$pageModel->isEnabled($page))
    {
        $pageModel->enableMenu($page);    
    }else
        $pageModel->disableMenu($page);
    
}

header('Location: ../index.php?menu=10');
