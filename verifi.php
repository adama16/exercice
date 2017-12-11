<?php
extract($_POST);
$visite="heure";
$visit="test";
$cal="calcul";
$mod="modif";
$user="user";
$profil="user";
$mdp="user";
$admin="admin";
$password="admin";
$prof="admin";

if($login==$user && $choix==$profil && $pass==$mdp)
{
   
 
}
elseif($login==$admin && $pass==$password && $choix==$prof)
{
   
        session_start();
        $_SESSION['login']=$login;
        $_SESSION['choix']=$prof;
        header('location:modif.php');
    }
    elseif($page==$visite || $page==$cal)
    {
        echo "vous ne disposez pas des droits pour consulter cette page <br>";
        echo '<a href="connexion.php">Retour</a>';
    }

elseif($login==$user && $pass!=$mdp)
{
    echo "mot de passe incorrect <br>";
    echo '<a href="connexion.php">Retour</a>';
}
elseif($login==$admin && $pass!=$password)
{
    echo "mot de passe incorrect <br>";
    echo '<a href="connexion.php">Retour</a>';
}
else
{
    echo "Merci de compléter les informations";
}




 
   

