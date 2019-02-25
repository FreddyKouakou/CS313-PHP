<?php
include "connectdatabase.php";
?>

<?php
$getFirstName = $_POST['first_name'];
$getLastName = $_POST['last_name'];
$getUserName = $_POST['users_name'];
$getPhoneNumeber = $_POST['telephone'];
$getClassroom_ID = $_POST['classroom'];
// echo $getClassroom_ID;

$db->query("INSERT INTO teachers(first_name, last_name, users_name, phone) VALUES('$getFirstName','$getLastName', '$getUserName', '$getPhoneNumeber')");
$teachers_id = $db->lastInsertId("teachers_teachers_ID_seq");
$db->query("UPDATE classrooms SET teacher_id = $teachers_id WHERE classroom_id = $getClassroom_ID");

header("location:teacherslogin.php");
?>