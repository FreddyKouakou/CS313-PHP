<?php
$userName = htmlspecialchars($_POST['username']);
$userEmail = $_POST['email'];
$userMajor = $_POST['major'];
$userComments = htmlspecialchars($_POST['comment']);
$userContinent = $_POST['continent'];
$continents = array('NA'=>'Noth America', 'SA'=>'South America', 'EU'=>'Europe','As'=>'Asia', 'Au'=>'Austalia', 'Af'=>'Africa','An'=>'Antartica');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Form</title>
</head>
<body>
   <p>Welcome: </p><h1><?php echo $userName;?></h1>
   <br>
   <p>Email: </p><h1><?php echo $userEmail;?></h1>
   <br>
   <p>Major: </p><h1><?php echo $userMajor;?></h1>
   <br>
   <p>My Comments: </p><h1><?php echo $userComments;?></h1>
   <br>
   <p>I have been in: </p><h1><?php 
   foreach($userContinent as $value){
       echo $continents[$value];
   }
   
   ?></h1>
</body>
</html>
