<?php
/**
 * created by PhpStorm.
 * User: Hamid
 * date: 18-12-20
 * Time: 10:30
 */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdarcht</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
$clubs = array("De spartelkuikens" => "25", "De waterbuffels" => "32", "Plonsmderin" => "11", "Bommetje" => "23");
$img = "<img src='img\zwemmen.png'>";
echo "<table>";

 foreach ($clubs as $x => $x_value) {
   echo "<tr>";
     echo "<td>" . $x . "<td>" . $x_value;
     while  ($x_value > 4){
       echo  "<td>" . $img;
       $x_value= $x_value-5;
     }
     echo "<tr>";
 }

echo "<table>";


?>

</body>
</html>