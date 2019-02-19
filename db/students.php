<?php
include "connectdatabase.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
 <?php
 $username = $_POST['user_name'];
 $studentID = NULL;
  /*This loop get the student id from the database example id = 1 */
 foreach ($db->query("SELECT student_id FROM parents WHERE users_name = '$username'") as $row)
 {
  $studentID = $row['student_id'];
 }
//  This loop will query the student name 
//  from the students table in the database by using the student_id
 
 foreach ($db->query("SELECT first_name, last_name FROM students WHERE student_id = '$studentID'") as $row)
 {
    $studentfName = $row['first_name'];
    $studentlName = $row['last_name'];
    echo "<h1> $studentfName $studentlName</h1>";
  }

/* This loop get the students exercise and score from the database */
echo "<table> 
<tr>
    <th>Exercises</th> 
    <th>Score</th>
</tr>";
 
foreach ($db->query("SELECT exercise_name, score FROM marks WHERE student_id = '$studentID'") as $row)
 {

     $studentScore = $row['score'];
     $exercise = $row['exercise_name']; //Take the name of the column from the database and make it available for the parents.
   
echo "<tr>";  

echo "<td>$exercise</td> 

<td>$studentScore </td>";
echo "</tr>";
 }
 echo "</table>";
 ?>    
</body>
</html>