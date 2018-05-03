<?php
$host = "localhost";
$username = "crms_u";
$password = "%2801%crms$";
$database = "crms";
$conn = mysqli_connect($host, $username, $password, $database);

if($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo "Connection successful";
?>