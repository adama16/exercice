<?php
session_start();


if (!isset($_SESSION['login']) && !isset($_SESSION['choix']))
{
    echo "veuillez vous connecter first  <br>";
    echo '<a href="connexion.php">connecter-vous</a>';
}
elseif(isset($_SESSION['login']) && isset($_SESSION['choix']))

{
    echo '<html>';
    echo '<body>';
    echo 'Bonjour ' . $_SESSION['login'] . '<br> votre profil est : ' .$_SESSION['choix']. '<br>';



?>
<!DOCTYPE HTML>
<html lang="Fr">

    <head>
        <meta charset="UTF-8">
        <title>Calculatrice</title>
    </head>

<body>

    <form method="POST" action="#">
         Nombre1 <input type="number" name="nb1"> <br> <br>
         Nombre2 <input type="number" name="nb2"> <br> <br>
         Operateur <select name="choix">
                 <option value="">selectionner un operateur</option>
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
                <option value="modulo">%</option>
              </select> <br> <br>
         <input type="submit" value="calculer" name="calculer">   
         <input type="reset" value="effacer">  
    </form> <?php
    
    

    

            extract($_POST);
            if(isset($calculer) && isset($nb1) && isset($nb2) && isset($choix))
            {
                if($nb1 !=NULL AND $nb2 !=NULL)
                {
                    if($choix=="division" && $nb2==0)
                    {
                        echo "Voyons on ne peut pas diviser par 0";
                    }
                    else
                    {
                        if($choix=="addition")
                        {
                            $op="$nb1+$nb2";
                            $result=$nb1+$nb2;
                            echo "$op = $result";
                        }
                        if($choix=="soustraction")
                        {
                            $result=$nb1-$nb2;
                            echo "$nb1-$nb2= $result";
                        }
                        if($choix=="multiplication")
                        {
                            $result=$nb1*$nb2;
                            echo "$nb1*$nb2 = $result";
                        }
                        if($choix=="modulo")
                        {
                            if($nb2==0) 
                            {
                                echo "On ne divise pas par 0";
                            }
                            else
                            {
                                $result=$nb1%$nb2;
                                echo "$nb1%$nb2=$result";
                            }
                            
                        }
                        
                        if($choix=="division")
                        {
                            $result=$nb1/$nb2;
                            echo "$nb1/$nb2 = $result";
                        }
                    }


                }
                else
                {
                    echo "veuillez renseigner tous les champs";
                }
            }
            echo '<a href="logout.php">Déconnection</a>';

        

}




?>
</body>



</html>
<?

 
 


?>