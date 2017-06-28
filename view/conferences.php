<html>
<?php
require "controller/conferencesController.php";
?>
<body>
<?php foreach ($conferences as $res) :
    $conference=new conference($res);
    ?>
    <?php echo "<a href='index.php?conf=".$conference->getId()."' target='_blank'>"; ?>
    <div id="journal">
        <legend><?= $conference->getTitre(); ?></legend>
        <p>Date Soumission: <?= $conference->getDateSoumission(); ?></p>
        <p>Date Déroulement: <?= $conference->getDateDeroulement();?></p>
    </div>
    <?php echo "</a>"; ?>
<?php endforeach;?>

</body>
</html>
