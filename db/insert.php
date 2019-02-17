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