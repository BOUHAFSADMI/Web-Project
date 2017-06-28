<html>
<body>

<?php
if(file_exists("controller/commentsController.php"))
    include_once ("controller/commentsController.php");
if(file_exists("controller/userManager.php"))
    include_once ("controller/userManager.php");
?>

<div class="ConfigSection">

    <h4>Gestion Logo</h4>
    <form action="controller/configController.php" method="post" enctype="multipart/form-data">
        <input name="logo" type="file" accept="image/png"><br>
        <input name="update" class="input validation" type="submit" value="Modifier Logo">
    </form>
    <form action="controller/configController.php" method="post">
        <input name="supprimer" class="input validation" type="submit" value="Supprimer">
    </form>
    <form action="controller/configController.php" method="post" enctype="multipart/form-data">
        <input name="logo" type="file" accept="image/png"><br>
        <input name="ajouter" class="input validation" type="submit" value="Ajouter">
    </form>
</div>

<br><br><br><br>
<div class="ConfigSection">

    <h4>Gestion de Coleurs</h4>
    <form action="controller/pageController.php" method="get">
        La Page: <input class="input" list="pages" name="pages" placeholder="page">
        Coleur de fond: <input name="fond" type="color" class="input">
        <datalist id="pages">
            <option value="Accueil"></option>
            <option value="Chercheurs"></option>
            <option value="Publications"></option>
            <option value="Journaux"></option>
            <option value="Conférences"></option>
            <option value="Contact"></option>
        </datalist>
        <input class="input validation" type="submit" value="Valider">
    </form>
</div>
<br><br><br><br>
<div class="ConfigSection">
    <h4>Gestion des Menu</h4>
    <form action="controller/pageController.php" method="get">
        La Page: <input class="input" list="menu" name="menu" placeholder="page">
        <datalist id="menu">
            <option value="Accueil"></option>
            <option value="Chercheurs"></option>
            <option value="Publications"></option>
            <option value="Journaux"></option>
            <option value="Conférences"></option>
            <option value="Contact"></option>
        </datalist>
        <input class="input validation" type="submit" value="Désactiver/Activer">
    </form>

</div>
<br><br><br><br>
<div class="ConfigSection">
    <h4>Gestion de Commentaires</h4>
    <?php
    foreach ($result as $res):
        $comment= new comment($res);
    ?>
    <div id="comment">
        <p>ID: <?= $comment->getId()  ?></p>
        <p>Comment: <?= $comment->getComment() ?> </p>
        <?php if ($comment->getState()==1)
            echo "<p>etat: Activé</p>";
        else
            echo "<p>etat: Bloqué</p>";
        ?>
        <p>user: <?= $comment->getIdUser() ?> </p></p>
        <p>pub:  <?= $comment->getIdPub() ?> </p>
        <?php echo '<button class="validation input"><a href="index.php?comment="'.$comment->getId().'"></a>Supprimer</button>'; ?>
    </div>
<?php endforeach; ?>
</div>

<br><br><br><br>

<div class="ConfigSection">
    <h4>Gestion des Utilisateurs:</h4>
    <?php
        foreach ($resultat as $resa):
            $chercheur= new chercheur($resa['id'],$resa['nom'],$resa['prenom'],$resa['email'],$resa['password'],$resa['image'],$resa['fonction'],$resa['grade'],
                $resa['biographie'],$resa['cvitae'],$resa['idStructure'],$resa['idPays']);
        ?>
            <div id="comment">
                <p>ID: <?= $chercheur->getId() ?></p>
                <p>Nom: <?= $chercheur->getNom() ?></p>
                <p>Prenom: <?= $chercheur->getPrenom() ?></p>
                <p>Email: <?= $chercheur->getEmail() ?></p>
                <p>Etat: Activé</p>
                <button class="validation"><a href=""></a>Valider</button>
                <button class="validation"><a href=""></a>Bloquer</button>
                <button class="validation"><a href=""></a>Radier</button>
            </div>
    <?php endforeach; ?>
</div>
</body>
</html>
