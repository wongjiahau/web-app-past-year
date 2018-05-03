<?php
require("database.php");

function migrate($filename) {
    $file = $fopen($filename);
    while(!feof($file)) {
        $data = explode(",", fgets($file));

        $stmt = $conn->prepare("
            INSERT INTO customer (name,email,phone,city,state)
            VALUES (?,?,?,?,?)
        ");

        $stmt->bind_param("sssss", 
            $data[0], $data[1], $data[2], $data[3], $data[4]);

        $stmt->execute();
    }
    fclose($file);
}