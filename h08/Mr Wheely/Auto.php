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
    public function getUrl()
    {
        return $this->url;
    }
}