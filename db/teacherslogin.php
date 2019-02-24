<?php
include "connectdatabase.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher's Username</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <legend>Username</legend>
    <h3>Thanks for your hardwork at KKF International School.</h3>
    <p>Kindly write your username and provide students marks</p>
    <form action="marks.php" method="POST">
   <label for="username">User Name: </label><input type="text" name="users_name">
   <!-- <br>
   Pass Word: <br> <input type="password" name="user_passer">
-->
<br>
   <input type="submit" value="Send Request"> 
    </form>
    </fieldset>
    
</body>
</html>