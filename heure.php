<?php
session_start ();
$date = date("d-m-Y");
$heure = date("H:i");

if (!isset($_SESSION['login']) && !isset($_SESSION['choix']))
{
    echo "veuillez vous connecter first <br>";
    echo '<a href="connexion.php">connecter-vous</a>';
}

elseif (isset($_SESSION['login']) && isset($_SESSION['choix']))
 {

    echo '<html>';
    echo '<body>';
    echo 'Bonjour ' . $_SESSION['login'] . '<br> votre profil est : ' .$_SESSION['choix']. '<br>';
    echo ' Vous etes connectés le : <br>';
    echo  $date .' à ' . $heure. '<br>';
    echo '<a href="logout.php">Déconnection</a>';
}
elseif($_SESSION['login']==$admin && $_SESSION['choix']==$prof)
{
    echo "vous ne disposez pas des droits pour voir ce page";
    echo '<a href="connexion.php">Retour</a>';
}


?>


  




