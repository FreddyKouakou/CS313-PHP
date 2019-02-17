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
  <title>Marks</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
<!-- Teachers drop -->
<form action="marks.php" method="POST"> 
<fieldset>
<legend>Please Select a Class </legend>
<select name="classroom" id="#">
<!-- We are sending the teachers id and displaying the names of the teachers in the dropdowmn -->
<?php foreach ($db->query("SELECT classroom_id, classroom_name FROM classrooms") as $row) { 
$classroom_id = $row["classroom_id"];//this variable stores the teachers' id to make it easy for formatii=ng
$classroom_name = $row["classroom_name"];//store the teachers name and display
echo"<option value= $classroom_id>$classroom_name</option>";
echo $classroom_id;
}
?>
</select>
<br><br>
<input type="submit" value="Submit">
</fieldset>
</form>
</body>
</html>