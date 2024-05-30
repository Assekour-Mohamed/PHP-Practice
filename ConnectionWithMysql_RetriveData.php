

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="text-align:center;">
   
<?php

$servername = "localhost";
$username = "root";
$password = "Ass2@moha";

try {
  $connection = new PDO("mysql:host=$servername;dbname=carrental", $username, $password);


  $res = $connection->query("select carID , make , model, year from cars");
  $data = $res->fetchAll(PDO::FETCH_ASSOC);
  echo ' <table border style="width: 500px; height: 200px; text-align:center; "><tr><td>CarID </td><td>Make </td><td>model </td><td>year </td></tr>';
 
  for ($i=0; $i < count($data) ; $i++) { 

    echo '<tr><td>'.$data[$i]["carID"].' </td><td>'.$data[$i]["make"].'</td><td>'.$data[$i]["model"].'</td><td>'.$data[$i]["year"] .'</td></tr> ';
   }
   echo "</table>";
 
} catch (PDOException $e) {
  die($e->getMessage());
}
?>
</body>
</html>