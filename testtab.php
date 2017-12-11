<?php

session_start();

if (!isset($_SESSION['login']) && !isset($_SESSION['choix']))
{
    echo "veuillez vous connecter first  <br>";
    echo '<a href="connexion.php">connecter-vous</a>';
}
else
{
    echo '<html>';
    echo '<body>';
    echo 'Bonjour ' . $_SESSION['login'] . '<br> votre profil est : ' .$_SESSION['choix']. '<br>';

    ?>
    <html>
    
        <body>
            
            <form method="post" action="#">
                <input type="number" name="nbr">
                <input type="submit" name="valider" value="valider">
            </form>
        </body>
    </html><?php
    
    extract($_POST); //recupère les variables du formulaire
    if(isset($valider)) //verifie que la variable existe
    {
        if(isset($valider) && empty($nbr)) //si $nbr est vide
        {
            echo"choisir un nombre"; // affiche ceci
        }
        elseif($nbr<0) //sinon si $nbr est negatif
        {
            echo "choisir les valeurs positives";
        }
        else
        {
            echo "<table border=5 width=300 height=300>";
            $c=0;
            $b=$nbr-1;
            for($i=0;$i<$nbr;$i++)
            {
                echo "<tr>";
            
                for($j=0;$j<$nbr;$j++)
                {
                   
                    if($j==$c && $j==$b)
                    {
    
                       echo "<td style='background-color:green;'></td>";
                    } 
                     elseif($j==$b)
                        {
                            echo "<td style='background-color:red;'></td>";
                        }
                        elseif($j==$i)
                        {
                            
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        else
                        {
                            echo "<td>";
                        }
    
                    }
                  $c++; $b--;
                  echo "</tr>";
    
                }
                "</table>";
            }
            
          
        }
    
    
        echo '<a href="logout.php">Déconnection</a>';
       
    
    
    

   
}

?>
