<?php

$serverName = "localhost:3306";
$userName = "root";
$password = "0010345000";
$dbName = "school";


try {
    $con = new PDO("mysql:host=$serverName;dbName=$dbName",$userName,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "connection Success";

}
catch (PDOException $e){
    echo "Error".$e->getMessage();

}


?>