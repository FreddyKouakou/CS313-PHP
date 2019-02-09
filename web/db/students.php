<?php
    // $server = 'localhost';
    // $username = 'root';
    // $password = '';
    // $database = 'freddydb'; // replace with the name of the database you created on xampp MySQL

    // try {
    //     $db = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    //     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch(PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    // }

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

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