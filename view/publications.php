<?php

include "controller/publicationManager.php";


if($pubs!=null)
    foreach($pubs as $pub){
        $publication = new publication(0,$pub['titre'],$pub['date'],$pub['contenu'],$pub['idChercheur'],$pub['idThematique']);
        echo "<li class='cadre'><a href='index.php?id=".$publication->getId()."'></a><div><p>Titre: ".$publication->getTitre()."</p><p>Date :".$publication->getDate()."</p><p>Contenu: ".$publication->getContenu()."</p></div></li>";
    }


