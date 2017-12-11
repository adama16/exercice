<?php
session_start();//pour commencer la session
session_unset();//pour supprimer la session
session_destroy();//pour détruire la seesion
header('location:connexion.php');
?>