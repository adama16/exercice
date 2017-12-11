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

   

$tab=array(
            array(002,'ndao',22),
            array(003, 'lindor',31), 
            array(004,'seck',58));
            if(isset($_POST['modifier']))
            {
                extract($_POST);
                for($i=0;$i<3;$i++)
                {
                    if($code==$tab[$i][0])
                    {
                        $tab[$i][1]=$nom;
                        $tab[$i][2]=$age;
                    }
                   
                }
                
              
            
            }

    echo "<table border=2 width=200 height=200>";
    echo "<tr>";
    echo "  <th>Code</th>
            <th>Nom</th>
            <th>Age</th>";
    echo "</tr>";
    for($i=0;$i<count($tab);$i++)
    {
        echo "<tr>";
        for($j=0;$j<count($tab);$j++)
        {
            echo "<td>";
            echo $tab[$i][$j];
        }
        echo "<td>   <a href='voir.php?code=002&amp;nom=ndao&amp;age=22'>voir</a> ";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo '<a href="logout.php">Déconnection</a>';

}


