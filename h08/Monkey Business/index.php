<?php

include_once('Aapen.php');
include_once('Img.php');

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
    <style>
        body {
            margin: auto;
            text-align: center;
            font-family: 'Arial';
            font-weight: bold;
            font-size: 4.5vh;
            margin: 0;
            padding: 0;
        }

        img.aap.logo {
            display: grid;
            justify-content: center;
            align-content: center;
            margin: 0;
            padding: 0;

        }

        h1 {
            display: grid;
            justify-content: center;
            align-content: center;
            margin: 0;
            padding: 0;

        }

        p {
            margin: 0;
        }

        p a {
            text-decoration: none;
            font-family: Bangers;
            color: #ff8400;
            display: grid;
            justify-content: center;
            align-content: center;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<!--<img class='' src='img/monkey-business.jpg'>-->
<!--<h1>select your monkey!</h1>-->
<!--<img src='img/monkey_swings.png'>-->
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
