<?php
$user = "schooluser";
$pass = "school";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;usernam=school;password=0010345000', $user, $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>