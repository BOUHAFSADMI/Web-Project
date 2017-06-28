<?php





$db=Registry::getInstance()->getDbConnection();

$cherchreurModel = new chercheurModel($db);

$res = $cherchreurModel->getChercheur($_GET['id']);