<?php
include "connectdatabase.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Marks</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
<!-- Teachers drop -->
<form action="marks.php" method="POST"> 
<fieldset>
<legend>Teachers </legend>
<select name="classroom" id="#">
<!-- We are sending the teachers id and displaying the names of the teachers in the dropdowmn -->
<?php foreach ($db->query("SELECT classroom_id, classroom_name FROM classrooms") as $row) { 
$classroom_id = $row["classroom_id"];//this variable stores the teachers' id to make it easy for formatii=ng
$classroom_name = $row["classroom_name"];//store the teachers name and display
echo"<option value= $classroom_id>$classroom_name</option>";
echo $classroom_id;
}
?>
</select>
<br><br>
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>