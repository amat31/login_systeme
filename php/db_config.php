<?php
$dbservername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'ensat';

$conn = @mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if(!$conn){
    echo '<h3>Erreur: accées impossible à la base de données</h3>';
    echo mysqli_connect_error();
}