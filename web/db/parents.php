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
    <title>Parents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <legend>Parents Info</legend>
    <form action="students.php" method="POST">
   User Name: <br> <input type="text" name="user_name">
   <!-- <br>
   Pass Word: <br> <input type="password" name="user_passer">
-->
<br>
   <input type="submit" value="Log In"> 
    </form>
    </fieldset>
    
</body>
</html>