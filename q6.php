
<?php

function showImages($n)
{
    $animals = array(
        "Dog" => "dog.jpg",
        "Cat" => "cat.jpg",
        "Lion" => "lion.jpg",
        "Tiger" => "tiger.jpg",
        "Elephant" => "elephant.jpg"
    );

    $i = 0;

    foreach ($animals as $name => $image) {
        if ($i >= $n) {
            break;
        }

        echo "<div>";
        echo "<img src='images/" . $image . "' alt='" . $name . "'>";
        echo "<p>" . $name . "</p>";
        echo "</div>";

        $i++;
    }
}

$n = isset($_GET["n"]) ? (int)$_GET["n"] : 0;

if ($n < 1 || $n > 5) {
    echo "Please enter a number from 1 to 5.";
} else {
    showImages($n);
}

?>
