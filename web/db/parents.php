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
        <h4>Enter your username please.</h4>
    <legend>Parent's Username</legend>
    <form action="students.php" method="POST">
   <label for="username">User Name* </label><input required type="text" name="user_name">
   <!-- <br>
   Pass Word: <br> <input type="password" name="user_passer">
-->
<br>
   <input id="submit" type="submit" value="Send Request"> 
    </form>
    </fieldset>
    <br>
<!--Footer-->
<footer>
    &copy; 2019 &bull; Freddy Kouakou &bull; kou17001@byui.edu
</footer>

</body>
</html>