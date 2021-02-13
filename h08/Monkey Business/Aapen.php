<?php


class Aapen
{
    private $aap;
    private $aapen;

    public function __construct()
    {
    }

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

    /**
     * @param array $aapen
     */
    public function setAapen($aapen)
    {
        $this->aapen = $aapen;
    }

    /**
     * @return mixed
     */
    public function getAap()
    {
        return $this->aap;
    }

    /**
     * @param mixed $aap
     */
    public function setAap($aap)
    {
        $this->aap = $aap;
    }


}