<?php

function showAnimals($n)
{
    $animals = array(
        "Dog",
        "Cat",
        "Lion",
        "Tiger",
        "Elephant",
        "Horse",
        "Cow",
        "Rabbit",
        "Monkey",
        "Zebra"
    );

    $result = "";

    for ($i = 0; $i < $n; $i++) {
        $result = $result . ($i + 1) . ". " . $animals[$i] . "<br>";
    }

    return $result;
}

$n = $_GET["n"];

echo "Animal Names:<br><br>";

echo showAnimals($n);

?>