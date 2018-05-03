<html>
    <body>
        <table>
            <tr>
                <th>No.</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Unit price</th>
                <th>Total price</th>
            </tr>
<?php
$items = json_decode($_COOKIE["items"]);
$sum = 0;
foreach($items as $i) {
    $no = $i["no"];
    $item = $i["name"];
    $quantity = $i["quantity"];
    $unit_price = $i["unit_price"];
    $total_price = (int)($quantity) * (float)($unit_price);
    echo "
        <tr>
            <td>$no</td>
            <td>$item</td>
            <td>$quantity</td>
            <td>$unit_price</td>
            <td>$total_price</td>
        </tr>
    ";
    $sum += $total_price;
}
echo "
    <tr>
        <td colspan='4'>GRAND TOTAL</td>
        <td>$total_price</td>
    </tr>
";
?>
        </table>
    </body>
</html>
