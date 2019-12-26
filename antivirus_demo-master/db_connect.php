<?php
 
session_start();
 
$server = "localhost";
$user = "root";
$passwd = "toor";
$db = "hs2";
 
$con = new mysqli($server, $user, $passwd, $db);
//$con = mysqli_connect($server, $user, $passwd, $db);
 
?>
