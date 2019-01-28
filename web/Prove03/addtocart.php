<?php
session_start();
$fruits = $_POST['Fruits'];
foreach ($fruits as $addedFruits) {

if (isset($_SESSION[$addedFruits])) {//Check the quantity of items in a session
    $_SESSION[$addedFruits] += 1;
}else {
    $_SESSION[$addedFruits] = 1;
}
}

$openCloseSession = $_SERVER['HTTP_REFERER'];
header('Location: '. $openCloseSession);
die();


?>