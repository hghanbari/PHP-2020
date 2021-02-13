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
    /**
     * Retourneert naam van het programma
     * @param de omschrijving als string
     */
    public function getNaam ($omschrijving){
        return $this -> naam;
    }
    /**
     * Retourneert omschrijving van het programma
     * @param de omschrijving als string
     */
    public function getOmschrijving ($omschrijving){
        return $this -> omschrijving;
    }
}
?>