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
//Opdracht: Zwemclubs
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

 //opdrachte Kapperszaak Sanders

$kappersagenda =array("9.12"=>"Mevr. Pietrsen", "9.30"=>"Mevr. Willems","9.45"=>"","10.00"=>"Paul van den Broek","10.15"=>"Karel de Meeuw","10.30"=>"" );

print("De volgende momenten zijn nog beschikbaar:<ul>");
  foreach($kappersagenda as $tijd => $afspraak) {
      if ($afspraak == "") {
          print("<li>" . $tijd . "</li>");
      }
  }
print ("</ul>");
?>

</body>
</html>