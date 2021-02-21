<?php

include_once('Auto.php');
include_once('Autooverzicht.php');

$auto_list[] = ["Audi", 102000, "img/Audi1.jpg"];
$auto_list[] = ["Audi", 150000, "img/Audi2.jpg"];
$auto_list[] = ["Audi", 122000, "img/Audi3.jpg"];
$auto_list[] = ["Ferrari", 232000, "img/Ferrari1.jpg"];
$auto_list[] = ["Ferrari", 142000, "img/Ferrari2.jpg"];
$auto_list[] = ["Ferrari", 162000, "img/Ferrari3.jpg"];
$auto_list[] = ["Fiat", 103000, "img/Fiat1.jpg"];
$auto_list[] = ["Fiat", 150000, "img/Fiat2.jpg"];
$auto_list[] = ["Maserati", 150000, "img/Maserati1.jpg"];
$auto_list[] = ["Maserati", 259000, "img/Maserati2.jpg"];
$auto_list[] = ["Maserati", 195000, "img/Maserati3.jpg"];
$auto_list[] = ["Mercedes", 150000, "img/Mercedes1.jpg"];
$auto_list[] = ["Mercedes", 150000, "img/Mercedes2.jpg"];
$auto_list[] = ["Mercedes", 150000, "img/Mercedes3.jpg"];
$auto_list[] = ["Volkswagen", 150000, "img/Volkswagen1.jpg"];
$auto_list[] = ["Volkswagen", 150000, "img/Volkswagen2.jpg"];
$auto_list[] = ["Volkswagen", 150000, "img/Volkswagen3.jpg"];


$auto_overview = new Autooverzicht();

foreach ($auto_list as $auto_details) {
    $auto = new Auto($auto_details[0], $auto_details[1], $auto_details[2]);
    $auto_overview->voegAutoToe($auto);
}

$query_mark = $_GET['mark'];
$query_min_prijs = $_GET['min_prijs'];
$query_max_prijs = $_GET['max_prijs'];


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
<main>
    <form action="indexAuto.php" method="get">
        <div class="form-group">
            <label for="sell">Mark:</label>
            <select class="form-control" id="merk" name="mark">
                <option value="">---Alle merkrn---</option>
                <option value="Audi" <?= $query_mark === 'Audi' ? 'selected' : '' ?>>Audi</option>
                <option value="Ferrari" <?= $query_mark === 'Ferrari' ? 'selected' : '' ?>>Ferrari</option>
                <option value="Volkswagen" <?= $query_mark === 'Volkswagen' ? 'selected' : '' ?>>Volkswagen</option>
                <option value="Maserati" <?= $query_mark === 'Maserati' ? 'selected' : '' ?>>Maserati</option>
                <option value="Fiat" <?= $query_mark === 'Fiat' ? 'selected' : '' ?>>Fiat</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Minimale prijs:</label>
            <input type="text" class="form-control" id="type" name="min_prijs" value="<?= $query_min_prijs ?>">
        </div>
        <div class="form-group">
            <label for="type">Maximale prijs:</label>
            <input type="text" class="form-control" id="type" name="max_prijs" value="<?= $query_max_prijs ?>">
        </div>
        <button type="submit" name="knop" value="submit" class="btn btn-default">Submit</button>
    </form>
    <div class="autos-list">
        <?php


        if ($query_mark ||  $query_min_prijs || $query_max_prijs) {
            foreach ($auto_overview->getGefilterdeLijst($query_mark, $query_min_prijs, $query_max_prijs) as $auto) { ?>
                <div class="auto">
                    <img src='<?= $auto->getUrl() ?>'>
                    <h3><?= $auto->getMark() ?></h3>
                    <p>€ <?= $auto->getPrijs() ?></p>
                </div>
            <?php }
        } else {
            foreach ($auto_overview->getAutoLijst() as $auto) { ?>
                <div class="auto">
                    <img src='<?= $auto->getUrl() ?>'>
                    <h3><?= $auto->getMark() ?></h3>
                    <p>€ <?= $auto->getPrijs() ?></p>
                </div>
            <?php }
        } ?>
    </div>
</main>
</body>
</html>

