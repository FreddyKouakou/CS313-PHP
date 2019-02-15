<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Purchase Review</title>
    <style type="text/css">
    form legend{
        color:#445ba9;
        margin: 0 1rem;
        padding-top: 1rem;

    }
    </style>
</head>

<body>
    <!--Display customer info-->
    <?php 
     $firstName = $_POST["fname"];
     $lastName = $_POST["lname"];
     $addressN = $_POST["addressCusto"];
     $phoneNumber = $_POST["phone"];
    ?>
<fieldset>
<legend>Customer Information</legend>
<p class="one"> First Name*: <?php echo $firstName ?></p>
<p class="one"> Last Name*: <?php echo $lastName ?> </p>
<p class="one"> Address*: <?php echo $addressN ?></p>
<p class="one"> Phone*: <?php echo $phoneNumber ?>  </p>
</fieldset>
<fieldset>

    <!--Display the item selected-->
    <?php
    $orangeQunatity = $_POST["orange"];
    $mangoQunatity = $_POST["mango"];
    $bananaQunatity = $_POST["banane"];
    $tangerineQunatity = $_POST["tangerine"];
    $appleQunatity = $_POST["apple"];
    $totalQuantity = $orangeQunatity + $mangoQunatity + $bananaQunatity + $tangerineQunatity + $appleQunatity;
    $orangePrice = number_format($orangeQunatity*.10, 2);
    $mangoPrice = number_format($mangoQunatity*.15, 2);
    $bananaPrice = number_format($bananaQunatity*.20, 2);
    $tangerinePrice = number_format($tangerineQunatity*.30, 2);
    $applePrice = number_format($appleQunatity*.50, 2);

    $subTotalPrice = $orangePrice + $mangoPrice + $bananaPrice + $tangerinePrice + $applePrice;
    $tax = $subTotalPrice * .01;
    $shipping = $subTotalPrice*.05;
    $totaPrice = $subTotalPrice + $tax + $shipping;
    ?>
    <fieldset>
<table border = "2">
    <th>These are the to quantity of your selection</th>
    <tr>
        <td>Orange</td> <td><?php echo $orangeQunatity?></td><td><?php echo $orangePrice?></td>
    </tr>
    
    <tr>
        <td>Mango</td> <td><?php echo $mangoQunatity?></td><td><?php echo $mangoPrice?></td>
    </tr>
    
    <tr>
        <td>Banana</td> <td><?php echo $bananaQunatity?></td><td><?php echo $bananaPrice?></td>
    </tr>
    
    <tr>
        <td>Tangerine</td> <td><?php echo $tangerineQunatity?></td><td><?php echo $tangerinePrice?></td>
    </tr>
    
    <tr>
        <td>Apple</td> <td><?php echo $appleQunatity?></td><td><?php echo $applePrice?></td>
    </tr>
    <tr>
        <td>Total</td> <td><?php echo $totalQuantity?> </td> <td><?php echo $totaPrice?></td>
    </tr>
</table>
    </fieldset>
</fieldset>
<fieldset>
    <p>Credit Card Type: <?php echo $_POST["payment"]?></p>
    <p>Expiration Month: <?php echo $_POST["month"]?></p>
    <p>Expiration Year: <?php echo $_POST["year"]?></p>
    <p>Credit Card Number: <?php echo $_POST["number"]?></p>
    <p>Email: <?php echo $_POST["email"]?></p>
</fieldset>
<fieldset>
<form action="confirm.php" method= "POST">
    <input type="hidden" value= <?php echo $orangeQunatity?>/>
    <button class="submitBtn" type="submit" value="Confirm Order">Confirm Order</button>
</form>

<form action="eCom.html" method= "POST">
    <input type="hidden" value= <?php echo $orangeQunatity?>/>
    <button class="resetBtn" type="submit" value="Cancel Order">Cancel Order</button>
</form>
</fieldset>
</body>
</html>