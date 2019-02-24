<?php
include "connectdatabase.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teachers Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="insertteachers.php" method="POST">
<fieldset>
<legend>Teacher's Information</legend>
First Name:*<input type="text" name="first_name">
Last Name:*<input type="text" name="last_name">
Username:*<input type="text" name="users_name">
<!-- Password* : <input type="password" name="password"> -->
Telephone *: <input type="telephone" name="telephone">
</fieldset>
<fieldset>
<!-- This form displays the list of Teacher's in a class for the parents to select their child -->
<legend>Select a Class</legend>
<select name="classroom" id="#">
<!-- We are sending the Teacher's id and displaying the names of the teachers in the dropdowmn -->
<?php foreach ($db->query("SELECT classroom_id, classroom_name FROM classrooms") as $row) { 
$classroom_id = $row["classroom_id"];
$classroom_name = $row["classroom_name"];

// $pass_word = $row["pass_word"];
echo"<option value= $classroom_id>$classroom_name </option>";
}
?>
</select>
<br><br>
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>