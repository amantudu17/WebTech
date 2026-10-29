<?php

function findOddNumbers($n)
{
    $result = "";

    for ($i = 1; $i <= $n; $i++) {

        if ($i % 2 != 0) {
            $result = $result . $i . " ";
        }

    }

    return $result;
}

$n = $_GET["n"];

echo "Odd numbers from 1 to " . $n . ":<br><br>";

echo findOddNumbers($n);

?>