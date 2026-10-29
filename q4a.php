<?php

function sortNumbers($numbers)
{
    $arr = explode(" ", $numbers);

    sort($arr);

    return implode(" ", $arr);
}

$numbers = $_GET["numbers"];

echo "Sorted numbers:<br><br>";

echo sortNumbers($numbers);

?>