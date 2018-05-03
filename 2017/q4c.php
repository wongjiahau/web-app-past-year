<?php
require("database.php");

if(empty($_POST)) {
    die("Error: POST value is empty");
}
$id    = $_POST["id"];
$name  = $_POST["name"];
$email = $_POST["email"];
$city  = $_POST["city"];
$state = $_POST["state"];

$stmt = $conn->prepare("
    UPDATE customer 
    SET name=?, 
        email=?, 
        city=?,
        state=?
    WHERE id=?"
);
$stmt->bind_param("sssss", $id, $name, $email, $city, $state);
$stmt->execute();
?>