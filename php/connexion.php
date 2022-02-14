<?php
if(empty($_POST['submit']) || empty($_POST['pass']) || empty($_POST['username'])){
    header('location: index.php?error=missinginputs');
    exit();
}
$user = $_POST['username'];
$password = $_POST['pass'];
include 'db_config.php';

$sql1 = "SELECT username, pass FROM users WHERE username = '".addslashes($user)."' AND pass = '".addslashes($password)."'";

$result1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($result1) < 1){
    header('location: index.php?error=userdontexists');
    //exit();
}else{

session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['pass'] = $_POST['pass'];
header('location:bienvenue.php');

}
