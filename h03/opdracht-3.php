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
</head>
<body>
<?php
$bedrag = 10;
$leeftijd = 66;

if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;

    }
if ($leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 3){
    $bedrag = 0;
}

echo $bedrag;

?>

</body>
</html>