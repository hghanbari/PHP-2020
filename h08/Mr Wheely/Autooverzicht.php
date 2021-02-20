<?php


class Autooverzicht
{
    private $autos = [];

    public function voegAutoToe(Auto $auto)
    {
        $this->autos[] = $auto;
    }

    public function getGefilterdeLijst($mark, $min_price, $max_price)
    {

    }

    public function getAutoLijst()
    {
        return $this->autos;
    }

}