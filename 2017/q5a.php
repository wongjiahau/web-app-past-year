<?php
$items = json_decode($_COOKIE["items"]);
$newItem = array(
    "id"         => $_POST["id"],
    "name"       => $_POST["name"],
    "quantity"   => $_POST["quantity"],
    "unit_price" => $_POST["unit_price"]
);
array_push($items, $newItem);
setcookie("items", json_encode($items));