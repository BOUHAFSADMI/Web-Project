<?php



$db=Registry::getInstance()->getDbConnection();
$publiactionModel = new publicationModel($db);
$pubs=$publiactionModel->getAllPub();