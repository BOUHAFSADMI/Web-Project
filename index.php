<?php
session_start();

include "model/connection.php";
include "model/chercheur.php";
include "model/chercheurModel.php";
include "model/conferencesModel.php";
include "model/conference.php";
include "model/journauxModel.php";
include "model/journal.php";
include "model/publicationModel.php";
include "model/publication.php";
include "model/pays.php";
include "model/thematique.php";
include "model/conferenceDetailsModel.php";
include "model/configModel.php";
include "model/pageModel.php";
include "model/commentsModel.php";
include "model/comment.php";

$db = Registry::getInstance()->getDbConnection();
$configModel=new configModel($db);


$pageModel=new pageModel($db);
?>

<!DOCTYPE html>
<html lang="fr">
    
<head>
    <title>Recherche Scientifique</title>
    <!--meta-->
    <meta name="author" content="SADMI BOUHAFS"/>
    <meta name="description" content="projet"/>
    <meta name="keywords" content="Recherche, Science, Culture"/>
    <meta charset="utf-8">
    <!--css style-->
    <link type="text/css" href="assets/css/style.css" rel="stylesheet"/>
    <!--JQuery-->
    <script type="text/javascript" src="assets/js/jquery-3.1.1.js"></script> 
    <!--js script-->
    <script type="text/javascript" src="assets/js/script.js"></script>
    
    
</head>
   
<?php
    if(isset($_GET['menu']))
    {
        switch ($_GET['menu'])
        {
            case 1:
                $color =  $pageModel->getColor("Accueil");
                echo "<body style='background-color:".$color."'>";
                break;
            case 2:
                $color =  $pageModel->getColor("Chercheurs");
                echo "<body style='background-color:".$color."'>";
                break;
            case 3:
                $color =  $pageModel->getColor("Publications");
                echo "<body style='background-color:".$color."'>";
                break;
            case 4:
                $color =  $pageModel->getColor("journaux");
                echo "<body style='background-color:".$color."'>";
                break;
            case 5:
                $color =  $pageModel->getColor("Conferences");
                echo "<body style='background-color:".$color."'>";
                break;
            case 6:
                $color =  $pageModel->getColor("Contact");
                echo "<body style='background-color:".$color."'>";
                break;
        }

    }
    else
    {
        $color =  $pageModel->getColor("Accueil");
        echo "<body style='background-color:".$color."'>";
    }

?>
    <header>
        <?php
            if($configModel->getLogo()!=null)
                echo '<a href="index.php?menu=1"><img src="'.$configModel->getLogo().'" alt="logo" width="250"></a>';
        ?>
        <nav>
            <ul class="menu">
                <?php
                    if($pageModel->isEnabled("Accueil")) echo '<li><a href="index.php?menu=1">Accueil</a></li>';
                    if($pageModel->isEnabled("Chercheurs")) echo '<li><a href="index.php?menu=2">Chercheurs</a></li>';
                    if($pageModel->isEnabled("Publications")) echo '<li><a href="index.php?menu=3">Publications</a></li>';
                    if($pageModel->isEnabled("Journaux")) echo '<li><a href="index.php?menu=4">Journaux</a></li>';
                    if($pageModel->isEnabled("Conferences"))  echo '<li><a href="index.php?menu=5">Conférences</a></li>';
                    if($pageModel->isEnabled("Contact"))  echo '<li><a href="index.php?menu=6">Contact</a></li>';

                    if(!isset($_SESSION['email']) && !isset($_SESSION['username']))
                        echo '<li id="login"><a href="index.php?menu=7">Connexion</a></li>';
                    else
                    {
                        echo '<li id="config"><a href="index.php?menu=10">Configuration</a></li>';
                        if(isset($_SESSION['email'])) echo  '<li id="login"><a href="#">'.$_SESSION['email'].'</a></li>';
                        else echo  '<li id="login"><a href="#">'.$_SESSION['username'].'</a></li>';
                        echo '<li id="login"><a href="controller/signout.php">Deconnexion</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>
    <br><br><br>
    
    <div id="contenu">
        <?php

            if(isset($_GET['conf']))
            {
                include_once("view/conferenceDetails.php");
            }
            else{
                if(!isset($_GET["menu"]) || $_GET["menu"]==1)
                    include_once("view/home.php");
                else{
                    if($_GET["menu"]==2 && isset($_GET['id']))
                    {
                        if(isset($_GET['id']))
                        {
                            if(isset($_SESSION['email']) && isset($_SESSION['password']))
                                include_once("view/chercheurDetails.php");
                            else
                            {
                                include_once("view/auth.php");
                            }
                        }
                    }else if($_GET["menu"]==2)
                        include_once("view/chercheurs.php");

                    if($_GET["menu"]==3)
                        include_once("view/publications.php");
                    if($_GET["menu"]==4)
                        include_once("view/journaux.php");
                    if($_GET["menu"]==5)
                        include_once("view/conferences.php");
                    if($_GET["menu"]==6)
                        include_once("view/contact.php");


                    if($_GET["menu"]==7)
                    {
                        include_once("view/auth.php");
                    }

                    if($_GET["menu"]==8)
                        include_once("view/insc.php");
                    /***********************/
                    if($_GET["menu"]==9)
                        include_once("view/news.php");

                    if($_GET["menu"]==10)
                        include_once("view/config.php");

                }
            }
        ?>
    </div>
    
     <br><br>
    <footer>
       <nav>
           <ul class="menu">
               <li><a href="index.php?menu=1">Accueil</a></li>
               <li><a href="index.php?menu=2">Chercheurs</a></li>
               <li><a href="index.php?menu=3">Publications</a></li>
               <li><a href="index.php?menu=4">Journaux</a></li>
               <li><a href="index.php?menu=5">Conférences</a></li>
               <li><a href="index.php?menu=6">Contact</a></li>
           </ul>
      </nav>
    </footer>   
<?php echo "</body>"; ?>
    
</html>