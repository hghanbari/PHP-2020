<?php

class Aapen
{
    private $aapen;

    public function voegAapenToe($aapen)
    {
        $this->aapen = $aapen;
    }

    /**
     * @return array
     */
    public function getAapen()
    {
        return $this->aapen;
    }



}