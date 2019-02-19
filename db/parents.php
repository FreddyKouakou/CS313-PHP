<?php
include "connectdatabase.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <legend>Parents Info</legend>
    <h3>Thanks for visiting KKF International School.</h3>
    <p>Kindly write your username and request for you child school performance table</p>
    <form action="students.php" method="POST">
   <label for="username">User Name: </label><input type="text" name="user_name">
   <!-- <br>
   Pass Word: <br> <input type="password" name="user_passer">
-->
<br>
   <input type="submit" value="Send Request"> 
    </form>
    </fieldset>
    
</body>
</html>