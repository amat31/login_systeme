<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><body>
    <title>Liste Des Etudiants</title>
  
    

</head>
<body>
<nav >
    <ol>
        <li ><a href="insert.html">Ajout D'un Etudiant</a></li>
        <li ><a href="deconnexion.php">Déconnexion</a></li>
    </ol>
</nav>
<?php
require 'db_config.php';

echo "<h1 LISTE DES ETUDIANTS </h1>";
echo "<table>";
echo "<tr> <td> <span>CNE</span> </td>";
echo "<td> <span>NOM</span> </td>";
echo "<td> <span>PRENOM</span> </td>";
echo "<td> <span>E-mail</span> </td>";
echo "<td> <span>PHOTO</span> </td> </tr>";
$mysql11="SELECT * FROM eleves ";
$array=mysqli_query($conn,$mysql11);
while ($row = mysqli_fetch_assoc($array)) {
    echo "<tr><td>".$row['CNE']."</td><td>".$row['NOM']."</td><td>".$row['PRENOM']."</td><td>".$row['EMAIL']."</td><td><image src=\"".$row['PHOTO']."\"</td></tr>";
    echo "<r>";
}
?>
</body>