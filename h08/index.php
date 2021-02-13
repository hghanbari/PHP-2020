<?php
include_once('lib/Programma.php');
include_once('lib/Liedje.php');

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