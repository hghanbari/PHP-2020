<?php

include_once('Aapen.php');
include_once('Img.php');
//$apen_list = ["Baviaan", "Gorilla", ""];

$apen_list[] = "Baviaan";
$apen_list[] = "Guereza";
$apen_list[] = "Langoer";
$apen_list[] = "Tamarin";
$apen_list[] = "Neusaap";
$apen_list[] = "Halfaap";
$apen_list[] = "Mandril";
$apen_list[] = "Oeakari";
$apen_list[] = "Faunaap";
$apen_list[] = "Hoelman";
$apen_list[] = "Meerkat";
$apen_list[] = "Oormaki";
$apen_list[] = "Gorilla";
$apen_list[] = "Kuifaap";
$apen_list[] = "Mensaap";
$apen_list[] = "Spinaap";

$ditimg = new Img();
$ditimg->setLogo("img/monkey-business.jpg");
$ditimg->setTitel("select your monkey!");
$ditimg->setSwings("img/monkey_swings.png");


$aapen = new Aapen();
$aapen->voegAapenToe($apen_list);

?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <title>Appen</title>
    <link rel="stylesheet" href="Monkeystyle.css">
</head>
<body>
<?php
foreach ($ditimg->getContent() as $p) {
    echo $p;

}

foreach ($aapen->getAapen() as $a) {
    echo "<p><a class='aap' style='text-decoration-color: darkorange' href='https://www.google.nl/search?q=$a&tbm=isch'>$a</a></p>";
}
?>
</body>
</html>
