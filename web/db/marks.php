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
    <title>Marks Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="insert.php" method="POST">
<fieldset>
<legend>Enter Marks and Exercise Name</legend>
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
 </fieldset>
 </form>
</body>
</html>