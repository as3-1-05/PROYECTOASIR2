<?php

session_start();

$databaseHost = 'localhost';
$databaseName = 'usuarios';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	


if(isset($_POST['btn_delete'])){
    $username2 = $_POST['borrarusuario'];

    $sql = mysqli_query($mysqli,"DELETE FROM login WHERE username='$username2'");
   echo "$sql";
   echo $_POST['borrarusuario'];
}
header("Location:logout.php");
