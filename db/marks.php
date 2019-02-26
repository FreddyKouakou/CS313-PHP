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
 session_start();
 if (isset($_SESSION["teacher"])) {
     $userName = $_SESSION["teacher"];
 }
 else{
$userName = $_POST["users_name"];
 }
foreach ($db->query("SELECT classrooms.classroom_id, classrooms.classroom_name FROM classrooms JOIN teachers ON classrooms.teacher_id = teachers.teacher_id WHERE teachers.users_name = '$userName'") as $row) {
    $getClassroom_id = $row["classroom_id"];
    $getClassroom_name = $row["classroom_name"];
}
foreach ($db->query("SELECT student_id, first_name, last_name FROM students WHERE classroom_id = $getClassroom_id") as $row)
 {

    $studentName = $row['first_name'].$row['last_name'];
   $student_ID = $row['student_id'];
echo "<tr>";  

echo "<td>$studentName</td> 

<td><input type='number' name='student$student_ID'></td>";
echo "</tr>";

 }
 echo "</table>";
 echo "<input type='hidden' value=$getClassroom_id name='classroomId'>";//send the data from here to the next page
 ?> 
<br>
<label for="exercise_name">Assignment Name</label>
 <input type="text" name="exercise_name">
 <br><br>
 <input id="submit" type="submit" value="Submit">
 </form>
 <br>
 <!--Footer-->
<footer>
    &copy; 2019 &bull; Freddy Kouakou &bull; kou17001@byui.edu
</footer>

</body>
</html>