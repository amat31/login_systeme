<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login To ENSAT Platforme</title>
</head>
<body>
    <h1>Welcome to ENSAT plateforme</h1>
    <table align="center">
      <form action="connexion.php" method="POST">
        <tr>
           <td >Nom d'utilisateur: </td>
           <td><input type="text" name="usr" placeholder="Votre identifiant" value="<?php echo $_POST['usr']; ?>"></td>
        </tr>
        <tr>
           <td >Mot de passe: </td>
           <td><input type="password" name="pwd" placeholder="Votre mot de passe" value="<?php echo $_POST['pwd']; ?>"></td>
        </tr>
        <tr>
           <td><input type="submit" name="submit" value="connexion"></td>
           <td><input type="reset" value="annuler"></td>
        </tr>
      </form>
    </table>
</body>
</html>
<?php 

   if($_GET['error'] == 'missinginputs'){
      echo '<p> Veuillez mentionner votre idantifiant ainsi que le mot de passe </p>';
      }

   if($_GET['error'] == 'userdontexists'){
      echo '<p> Compte inexistant, Veuillez vérifier vos coordonnées';
      }