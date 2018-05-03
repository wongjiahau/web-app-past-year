<?php
session_start();
$email    = $_SESSION["email"];
$username = $_SESSION["username"];
$name     = $_POST["name"];
$address  = $_POST["address"];

$file = fopen("data.csv", "a");
fputs($file, "$email,$username,\"$name\",\"$address\"");
fclose($file);
?>