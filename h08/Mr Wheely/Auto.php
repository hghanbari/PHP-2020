<?php


class Auto
{
    private $mark = "";
    private $type = "";
    private $prijs = 0;
    private $url = "";

    public function __construct($mark, $prijs, $url)
    {
        $this->mark = $mark;
        $this->prijs = $prijs;
        $this->url = $url;
    }


    function geefGas()
    {

    }

    /**
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * @param string $mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}