<?php
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

//retrieving data from Scriptures.php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Receive Data From Scriptures</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php
//use double when there is need to make use of php variable in the statement such as this querry
    
    foreach ($db->query("SELECT id, book, chapter, verse, content FROM Scriptures WHERE id = '$id'") as $row)  {
        echo '<b>' .
        $row['book'] . ' ' .
        $row['chapter'] . ' : ' .
        $row['verse'] . '</b>' . ' - '.
        $row['content'] . '</br>';
    }
    
?>
</body>
</html>