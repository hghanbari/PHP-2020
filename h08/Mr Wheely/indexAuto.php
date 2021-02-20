<?php

include_once('Auto.php');
include_once('Autooverzicht.php');

$auto_list[] = ["Audi", "€102000", "img/Audi1.jpg"];
$auto_list[] = ["Audi", "€150000", "img/Audi2.jpg"];
$auto_list[] = ["Audi", "€122000", "img/Audi3.jpg"];
$auto_list[] = ["Ferrari", "€232000", "img/Ferrari1.jpg"];
$auto_list[] = ["Ferrari", "€142000", "img/Ferrari2.jpg"];
$auto_list[] = ["Ferrari", "€162000", "img/Ferrari3.jpg"];
$auto_list[] = ["Fiat", "€103000", "img/Fiat1.jpg"];
$auto_list[] = ["Fiat", "€150000", "img/Fiat2.jpg"];
$auto_list[] = ["Maserati", "€150000", "img/Maserati1.jpg"];
$auto_list[] = ["Maserati", "€259000", "img/Maserati2.jpg"];
$auto_list[] = ["Maserati", "€195000", "img/Maserati3.jpg"];
$auto_list[] = ["Mercedes", "€150000", "img/Mercedes1.jpg"];
$auto_list[] = ["Mercedes", "€150000", "img/Mercedes2.jpg"];
$auto_list[] = ["Mercedes", "€150000", "img/Mercedes3.jpg"];
$auto_list[] = ["Volkswagen", "€150000", "img/Volkswagen1.jpg"];
$auto_list[] = ["Volkswagen", "€150000", "img/Volkswagen2.jpg"];
$auto_list[] = ["Volkswagen", "€150000", "img/Volkswagen3.jpg"];


$auto_overview = new Autooverzicht();

foreach ($auto_list as $auto_details) {
    $auto = new Auto($auto_details[0], $auto_details[1], $auto_details[2]);
    $auto_overview->voegAutoToe($auto);
}


?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <title>Auto</title>
    <link rel="stylesheet" href="Aotostyle.css">
    <img class="logo" src="img/logo.jpg">
</head>
<body>
<div>
    <form action="indexAuto.php" method="post">
        <div class="form-group">
            <label for="sell">Mark:</label>
            <select class="from-control" id="merk" name="merk">
                <option value="">---Alle merkrn---</option>
                <option value="">Audi</option>
                <option value="">Ferrari</option>
                <option value="">Volkswagen</option>
                .
                <option value="">Maserati</option>
                <option value="">Maserati</option>
                <option value="">Fiat</option>
            </select>
        </div>
        <div class="from-group">
            <label for="type">Minimale prijs:</label>
            <input type="text" class="form-control" id="type" name="minprijs">
        </div>
        <div class="from-group">
            <label for="type">Maximale prijs:</label>
            <input type="text" class="form-control" id="type" name="maaxprijs">
        </div>
        <button type="submit" name="knop" value="submit" class="btn btn-default">Submit</button>
    </form>
    <?php

    foreach ($auto_overview->getAutoLijst() as $auto) {
        ?>
        <div>
            <img src='<?= $auto->getUrl() ?>'>
            <p>Mark: <?= $auto->getMark() ?></p>
            <p>Prijs: <?= $auto->getPrijs() ?></p>
        </div>
        <?php
    }
    ?>
</body>
</html>

