<?php
include_once('Programma.php');
include_once('Liedje.php');

$ditprogramma =new Programma();
$ditprogramma -> setNaam("Mijn eerst programma");
$ditprogramma -> setOmschrijving("Even testen");

foreach ($ditprogramma -> getprogramma() as $p) {
    echo $p."</br>";
}
$nieuwliedje = new Liedje ("dit is de titel","rolling stones");
echo $nieuwliedje->getTitel()."</br>";
echo $nieuwliedje->getArtiest();

$ditprogramma->voegLiedjeToe($nieuwliedje);
foreach ($ditprogramma->getLiedjes() as $liedje){
    echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
}
?>