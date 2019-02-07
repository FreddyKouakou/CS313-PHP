<?php
/*
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
*/



    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'freddydb';

    try {
        $db = new PDO("mysql:host=$server;dbname=$database", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scriptures</title>
</head>
<body>
    <h1>Scriptures Resources</h1>
    <?php
    foreach ($db->query('SELECT id, book, chapter, verse, content FROM Scriptures') as $row) {
        $id = $row['id'];
        echo '<b>' .

        $row['book'] . ' ' .
        $row['chapter'] . ' : ' .
        $row['verse'] . '</b>' . ' - '.
        $row['content'] . '<br>';

        echo "<a href='receivingdata.php?id=$id'>Click To Display Content</a>";
        echo '<br>';
    }
    ?>
</body>
</html>

