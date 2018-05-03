<?php
require("database.php");

$result = $conn->query("SELECT id, name, email, phone, city FROM customer;");
?>
<html>
    <body>
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
            </tr>
            <?php
    while($row = $result->fetch_assoc()) {
        $id    = $row["id"];
        $name  = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $city  = $row["city"];
        echo "
        <tr>
            <td>$id</td>
            <td>$name</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$city</td>
        </tr>
        ";
    }
            ?>
        </table>
    </body>
</html>