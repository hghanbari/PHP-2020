<?php

CtoF();
deelbaar3();


function CtoF()
{

    $c = 8;
    $cTOf = $c * 1.8;
    $f = 32 + $cTOf;
    echo "Celsius  =", $c, "<br>", "Fahrenheit =", $f;
}

function deelbaar3()
{
    $number = 8;

    if ($number % 3 == 0) {
        echo "<br>", "$number", ' getal deelbaar is door 3 : ' . (boolval("1") ? 'true' : 'false');
    } else {

        echo "<br>", "$number", ' getal deelbaar is door 3 : ' . (boolval("") ? 'true' : 'false');
    }

}

    $sporten = array("handbel", "korfbal", "hockey", "schaatsen");
    shuffle($sporten);
    geefarray($sporten);

    function geefarray($arr)
    {
        foreach ($arr as $arr_element) {
            echo "<li>" . $arr_element . "</li>";
        }
    }
    ?>