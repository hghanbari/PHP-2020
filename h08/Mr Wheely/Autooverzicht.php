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
        $filtered_list = $this->autos;

        if ($mark) {
            $filtered_list = array_filter($filtered_list, function ($v) use ($mark) {
                return $v->getMark() === $mark;
            });
        }

        if($min_price) {
            $min_price = intval($min_price);
            $filtered_list = array_filter($filtered_list, function ($v) use ($min_price) {
                return $v->getPrijs() >= $min_price;
            });
        }

        if($max_price) {
            $max_price = intval($max_price);
            $filtered_list = array_filter($filtered_list, function ($v) use ($max_price) {
                return $v->getPrijs() <= $max_price;
            });
        }

        return $filtered_list;
    }

    public function getAutoLijst()
    {
        return $this->autos;
    }

}