<?php


$id=$_GET['conf'];


$db=Registry::getInstance()->getDbConnection();

$confDetailsModel = new conferenceDetailsModel($db);

$result = $confDetailsModel->getConfDetails($id);

$oldConfs=$confDetailsModel->getOldConf($id);
