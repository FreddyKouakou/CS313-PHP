<?php
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