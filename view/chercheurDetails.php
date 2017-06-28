<html>

<body>
<?php

include_once "controller/chercheurDetailsManager.php";

$chercheur= new chercheur($res['id'],$res['nom'],$res['prenom'],$res['email'],$res['password'],$res['image'],$res['fonction'],$res['grade'],
    $res['biographie'],$res['cvitae'],$res['idStructure'],$res['idPays']);
?>

<?php
if($res!=null)
{
    $chercheur= new chercheur($res['id'],$res['nom'],$res['prenom'],$res['email'],$res['password'],$res['image'],$res['fonction'],$res['grade'],
        $res['biographie'],$res['cvitae'],$res['idStructure'],$res['idPays']);
    echo "<div id='info'>";
    echo "<img src='data:image/png;base64,".base64_encode($chercheur->getImage())."' alt=''>";
    echo "<p>NOM: ".$chercheur->getNom()." </p>";
    echo  "<p>PRENOM: ".$chercheur->getPrenom()." </p>";
    echo "<p>EMAIL: ".$chercheur->getEmail()."</p>";
    echo "<p>FONCTION: ".$chercheur->getFonction()."</p>";
    echo "<p>GRADE: ".$chercheur->getGrade()."</p>";
    echo "<p>BIOGRAPHIE: <br>".$chercheur->getBiographie()."</p>";
    echo "<p>CV:</p>";
    echo "<iframe src='data:application/pdf;base64,".base64_encode($chercheur->getCvitae())."'type='application/pdf' frameborder='0' width='100%' height='1000px'></iframe>";
    echo "</div>";
    }
    ?>

</body>
</html>

