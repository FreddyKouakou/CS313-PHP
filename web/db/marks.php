<?php
include "connectdatabase.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marks Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="insert.php" method="POST">

<?php
/* This loop get the students exercise and score from the database */

echo "<table> 
<tr>
    <th>Names</th> 
    <th>Marks</th>
</tr>";
 
$classroomId = $_POST["classroom"];
foreach ($db->query("SELECT student_id, first_name, last_name FROM students WHERE classroom_id = $classroomId") as $row)
 {

    $studentName = $row['first_name'].$row['last_name'];
   $student_ID = $row['student_id'];
echo "<tr>";  

echo "<td>$studentName</td> 

<td><input type='number' name='student$student_ID'></td>";
echo "</tr>";

 }
 echo "</table>";
 echo "<input type='hidden' value=$classroomId name='classroomId'>";//send the data from here to the next page
 ?> 

 <input type="text" name="exercise_name">
 <br><br>
 <input type="submit" value="Submit">
 </form>
</body>
</html>