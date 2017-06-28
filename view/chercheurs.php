<html>

<body>
<?php
include "controller/chercheurManager.php";
?>

<form method="POST" action="index.php?menu=2">
    <input class="input" list="continent" name="continent" placeholder="continent">
    <datalist id="continent">
        <option value="Afrique"></option>
        <option value="Europe"></option>
        <option value="Asie"></option>
        <option value="Amérique de North"></option>
        <option value="Amérique de sud"></option>
        <option value="Australie"></option>
    </datalist>
    <p>ou</p>
    <input class="input" name="pays" list="pays" placeholder="pays">
    <datalist id="pays">
        <?php
            foreach ($pays as $pa)
            {
                $myPay=new pays(null,$pa['alph2'],$pa['nom_fr_fr']);
                echo "<option value='".utf8_encode($myPay->getNom())."'></option>";
            }
        ?>
    </datalist>
    <p>ou/et</p>
    <input class="input" list="domaine" name="domaine" placeholder="domaine de recherche">
    <datalist id="domaine">
        <?php
        foreach ($domaines as $dom)
        {
            $thematique = new thematique(null,$dom['titre']);
            echo "<option value='".$thematique->getTitre()."'></option>";
        }

        ?>
    </datalist>
    <br>
    <input class="validation input" type="submit" class="input" value="Rechercher">
</form>
<br><br><br><br>
<?php

if($res!=null)
    foreach($res as $result){
        $chercheur= new chercheur($result['id'],$result['nom'],$result['prenom'],$result['email'],$result['password'],$result['image'],$result['fonction'],$result['grade'],
            $result['biographie'],$result['cvitae'],$result['idStructure'],$result['idPays']);
        echo "<li class='cadre'><a href='index.php?menu=2&id=".$chercheur->getId()."'><img src='data:image/png;base64,".base64_encode($chercheur->getImage())."' alt=''></a><div><p>NOM: ".$chercheur->getNom()."</p><p>PRENOM: ".$chercheur->getPrenom()."</p><p>Biographie: ".$chercheur->getBiographie()."</p></div></li>";
    }
?>
</body>
</html>




