<?php
/**
 * created by PhpStorm.
 * User: janjaap
 * date: 19-02-18
 * Time: 13:11
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdarcht</title>
    <style>
        .rood {
            border: #e01111 solid 5px;
            margin: 2px;

        }
        .green{
            border: #00ff04 solid 5px;
            margin: 2px;
        }
    </style>
</head>
<body>
<?php
$bomen = array("boomlus.jpg", "download.jpg", "images.jpg");

for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 == 0) {
        $class = "class='green'";

    } else {
                $class = "class='rood'";
    }
    echo "<img " . $class . "src='img/aap" . $i . ".jpg'>";
}
foreach ($bomen as $boom) {
    echo "<img src='img/" . $boom . "'>";
}
?>

</body>
</html>...