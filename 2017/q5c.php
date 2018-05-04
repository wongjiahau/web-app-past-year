<?php
require("database.php");
$transaction_id = $_COOKIE["cart"];
$customer_id    = $_COOKIE["customer_id"];
$date = date("Y-m-d H:i:s");

$conn->query("
    INSERT INTO transaction(date, customer_id) VALUES ($date, $customer_id);
");

$items = json_decode($_COOKIE["items"]);
foreach($items as $i) {
    $product_id = $i["id"];
    $quantity   = $i["quantity"];
    $unit_price = $i["unit_price"];
    $conn->query("
        INSERT INTO item(product_id, quantity, unit_price, transaction_id) VALUES (
            $product_id,
            $quantity,
            $unit_price,
            $transaction_id
        );
    ");
}

?>