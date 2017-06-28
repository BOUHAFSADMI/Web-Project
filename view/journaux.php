<html>
<?php
require "controller/journauxController.php";
?>
<body>
<?php foreach ($journaux as $res) :
        $journal=new journal($res['id'],$res['titre'],$res['isbn'],$res['impact'],null,null);
?>
    <?php echo "<a href='".$journal->getSite()."' target='_blank'>"; ?>
        <div id="journal">
            <legend><?= $journal->getTitre(); ?></legend>
            <p>ID: <?= $journal->getId(); ?></p>
            <p>ISBN: <?= $journal->getIsbn(); ?></p>
            <p>IMPACT: <?= $journal->getImpact();?></p>
        </div>
    <?php echo "</a>"; ?>
<?php endforeach;?>

<div id="list">
    <?php
    for ($i=1;$i<=$nbrPages;$i++)
        echo "<button><a href='index.php?menu=4&page=".$i."'>".$i."</a></button>";
    ?>
</div>

</body>
</html>
