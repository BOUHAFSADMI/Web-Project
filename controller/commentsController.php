<?php


$db = Registry::getInstance()->getDbConnection();

$commentsModel = new commentsModel($db);

$result = $commentsModel->getComments();
