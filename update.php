<?php

session_start();

$databaseHost = 'localhost';
$databaseName = 'usuarios';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (isset($_POST['boomer'])) {

    $mecomelapolla = $_SESSION['username'];
    $pass = $_POST['ok'];

    $sql = mysqli_query($mysqli, "UPDATE login SET password = md5('$pass') WHERE username='$mecomelapolla'");
    echo "$sql";
    echo $_POST['ok'];
}
header("Location:logout.php");
