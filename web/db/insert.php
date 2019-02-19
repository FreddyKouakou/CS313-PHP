<?php 
include "connectdatabase.php";
?>

<?php
$classroomInserted = $_POST['classroomId'];
echo $classroomInserted;
$getExercise = $_POST['exercise_name'];

echo $getExercise;
foreach ($db->query("SELECT student_id FROM students WHERE classroom_id = $classroomInserted") as $row)
{
    $studentID = "student".$row['student_id'];
    $studentIdNumber = $row['student_id'];
    $getMarks = $_POST[$studentID];
    $db ->query("INSERT INTO marks(student_id, exercise_name, score) VALUES($studentIdNumber, '$getExercise', $getMarks)");

}
header("location:dropdownclassroom.php");
?>