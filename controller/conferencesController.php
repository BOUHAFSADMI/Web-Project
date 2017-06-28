<?php

$db = Registry::getInstance()->getDbConnection();
$conferencesModel = new conferencesModel($db);


$date = date("YYYY-MM-DD");
$conferences = $conferencesModel->getConferences($date);

