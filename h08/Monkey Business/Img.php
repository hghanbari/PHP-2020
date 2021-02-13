<?php


class Img
{
    private $logo = "";
    private $titel = "";
    private $swings = "";

    function getContent()
    {
        return array("logo" => $this->logo,
            "titel" => $this->titel,
            "swings" => $this->swings);
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = "<img class='logo' src='$logo'>";
    }

    /**
     * @param string $titel
     */
    public function setTitel($titel)
    {
        $this->titel = "<h4>$titel</h4>";
    }

    /**
     * @param string $swings
     */
    public function setSwings($swings)
    {
        $this->swings = "<img class='swings' src='$swings'>";
    }
}