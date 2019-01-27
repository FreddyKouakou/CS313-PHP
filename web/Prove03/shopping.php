<?php session_start(); //Session gives access to the session array($_SESSION)
$priceArray = array('Orange'=>1, 'Mango'=>2, 'Banana'=>3, 'Tangerine'=>2, 'Pineapple'=>5);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shopping Cart</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <?php
        foreach ($_SESSION as $arrayIndex => $arrayValue) {
            echo "<tr><td>$arrayIndex</td>";
            echo "<td>$priceArray[$arrayIndex]</td>";
            echo "<td>$arrayValue</td></tr>";
        }
        
        ?>
    </table>
<br>
<br>
    <a href="browse.html">Return to Shopping</a>
</body>
</html>