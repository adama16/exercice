<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="verifi.php"> <br> <br> <br> <br>
            <table width=100 height=300 border="3" align="center">
                <tr>
                    <td><table width="600" border="0">
                 <tr>
                    <td><div align="center"><strong> VEUILLEZ VOUS CONNECTER!!!  </strong></div></td> 
                </tr>
             </table>
            
        <table width="600" border="0">
          <tr>
            <td width="339"><div align="center"><strong>
              Votre login </strong align="center">
              <input name="login" type="text"  required>
</div></td>
           
          <tr>
            <td width="339"><div align="center"><strong> Password <br>
            
                  <input name="pass" type="password"  required>
            </strong></div></td>
            <tr>
            <td><div align="center" ><strong>Profil
                  <select name="choix">
                      <option value="rien">choix</option>
                      <option value="admin">admin</option>
                      <option value="user">user</option>
                  </select>
            </strong></div></td>
           
           
          </tr>

         
      
  </table>

     <div align="center"><strong>
          <input type="reset" name="effecer" value="Effacer">
          <input type="submit" name="envoyer" value="Envoyer">
      </strong></div></td>
    
        </form>
       
    </body>
  
</html>