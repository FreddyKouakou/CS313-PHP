<?php
/*This statement will display the information intered by the user on top of the screen under the url */
if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['password'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <section>
    <h4>Sign Up</h4>
    <form action="#" method="POST">
    <label for="username">User Name: </label>
    <input type="text" name="name">
    <label for="password">Password: </label>
    <input type="password" name="password">
    <div>
    <input type="submit" name="submit" value="Submit">
    </div>
    </form>
    </section>
</body>
</html>