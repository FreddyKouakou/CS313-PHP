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
    <legend>Enter Your Username</legend>
    <form action="marks.php" method="POST">
   <label class="username" for="username">User Name* </label><input required type="text" name="users_name">
   <!-- <br>
   Pass Word: <br> <input type="password" name="user_passer">
-->
<br>
   <input id="submit" type="submit" value="Go to Record"> 
    </form>
    </fieldset>
<br>
<!--Footer-->
<footer>
    &copy; 2019 &bull; Freddy Kouakou &bull; kou17001@byui.edu
</footer>

</body>
</html>