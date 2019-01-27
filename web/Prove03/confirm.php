<?php session_start(); //Session gives access to the session array($_SESSION)

$priceArray = array('Orange' => 1, 'Mango'=>2, 'Banana'=>3, 'Tangerine'=>2, 'Pineapple'=>5);
?>
<?php
$userAddress = htmlspecialchars($_POST["useraddress"]);
$userCity = htmlspecialchars($_POST["usercity"]);
$userStreet = htmlspecialchars($_POST["userstreet"]);
$userZip = htmlspecialchars($_POST["userzip"]);

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
            echo "<tr> <td> $arrayIndex</td>";
            echo "<td>$priceArray[$arrayIndex]</td>";
            echo "<td> $arrayValue</td></tr>";
        }
        
        ?>
    </table>
<br>
<br>
<a href="browse.html">Return to Shopping</a></li>
<?php 
echo $userAddress;
echo"<br>";
echo $userCity;
echo"<br>";
echo $userStreet;
echo"<br>"; 
echo $userZip;
?>

</body>
</html>