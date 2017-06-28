<?php



$db = Registry::getInstance()->getDbConnection();
$journauxModel = new journauxModel($db);


if(isset($_GET['page']))
{
    $page = $_GET['page'];
    $journaux = $journauxModel->getJournaux(($page-1)*3);

}else
    $journaux = $journauxModel->getJournaux(1);



$nbrPages = $journauxModel->getNbrPages();
if($nbrPages % 3!=0) $nbrPages=$nbrPages/3 + 1;


