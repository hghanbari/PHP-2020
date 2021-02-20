<?php

class Programma {
    private $naam ="";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje){
        $this-> liedjes [] = $liedje;
    }
    public function getLiedjes(){
        return $this ->liedjes;
    }
    /**
     * Geeft programma informatie terug
     * @return array
     */
    function getProgramma(){
        return array("naam" => $this ->naam,
            "omschrijving" => $this -> omschrijving);
    }
    /**
     * Geeft programma een naam
     * @param de naam als string
     */
    function setNaam ($n){
        if (strlen($n)>=2){
        $this -> naam =$n;
        }
    }
    /**
     * Geeft programma een naam
     * @param de omschrijving als string
     */
    function setOmschrijving ($omschrijving){
        $this -> omschrijving =$omschrijving;
    }


}
?>