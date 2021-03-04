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

    /**
     * @return string
     */
    public function getMark(): string
    {
        return $this->mark;
    }

    /**
     * @param string $type
     * @return Auto
     */
    public function setType(string $type): Auto
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrijs(): int
    {
        return $this->prijs;
    }

    /**
     * @param int $prijs
     */
    public function setPrijs(int $prijs): void
    {
        $this->prijs = $prijs;
    }

    /**
     * @param string $mark
     * @return Auto
     */
    public function setMark(string $mark): Auto
    {
        $this->mark = $mark;
        return $this;
    }
}