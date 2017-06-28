<?php


$db = Registry::getInstance()->getDbConnection();


$chercheurModel = new chercheurModel($db);


$resultat= $chercheurModel->getChercheurs();
