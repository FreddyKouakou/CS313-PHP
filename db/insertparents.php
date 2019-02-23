<?php
include "connectdatabase.php";
?>
<?php
$getFirstName = $_POST['first_name'];
$getLastName = $_POST['last_name'];
$getUserName = $_POST['users_name'];
$getPhoneNumeber = $_POST['telephone'];
$getStudent_ID = $_POST['student'];

$db->query("INSERT INTO parents(first_name, last_name, users_name, phone, student_id) VALUES('$getFirstName','$getLastName', '$getUserName', '$getPhoneNumeber', $getStudent_ID)");
header("location:parents.php");
?>