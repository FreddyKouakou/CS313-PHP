<?php
include "connectdatabase.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parents Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="insertparents.php" method="POST">
<fieldset>
<legend>Please Create an Account</legend>
<label for="first_name"> First Name*</label><input required type="text" name="first_name">
<label>Last Name*</label><input required type="text" name="last_name">
<label>Username*</label><input type="text" name="users_name">
<!-- Password* : <input type="password" name="password"> -->
<label>Telephone*</label><input required type="telephone" name="telephone">
</fieldset>
<fieldset>
<!-- This form displays the list of students in a class for the parents to select their child -->
<legend>Students Informations</legend>
<select name="student" id="#">
<!-- We are sending the students id and displaying the names of the teachers in the dropdowmn -->
<?php foreach ($db->query("SELECT student_id, first_name, last_name FROM students") as $row) { 
$student_id = $row["student_id"];
$first_name = $row["first_name"];
$last_name = $row["last_name"];
// $pass_word = $row["pass_word"];
echo"<option value= $student_id>$first_name $last_name</option>";
echo $student_id;
}
?>
</select>
<br><br>
<input id="submit" type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>