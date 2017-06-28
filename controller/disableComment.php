<?php


$db = Registry::getInstance()->getDbConnection();


$id=$_GET['comment'];
$commentsModel = new commentsModel($db);

$result = $commentsModel->disableComment($id);

header('Location ../view/conf.php');
