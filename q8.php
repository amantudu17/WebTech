
<?php

function calculateResult($marks)
{
    $subjects = array(
        "Web Technology" => $marks[0],
        "Data Structures" => $marks[1],
        "Algorithms" => $marks[2],
        "Computer Architecture" => $marks[3],
        "Database Systems" => $marks[4]
    );

    $total = array_sum($subjects);
    $average = $total / count($subjects);

    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } elseif ($average >= 50) {
        $grade = "E";
    } else {
        $grade = "F";
    }

    echo "<h2>Student Result</h2>";

    echo "<h3>Subject-wise Marks</h3>";

    foreach ($subjects as $subject => $mark) {
        echo $subject . ": " . $mark . "<br>";
    }

    echo "<br>Total Marks: " . $total . " / 500";
    echo "<br>Average Marks: " . number_format($average, 2);
    echo "<br>Grade: " . $grade;
}

if (isset($_POST["marks"]) && count($_POST["marks"]) == 5) {
    $marks = $_POST["marks"];
    $valid = true;

    foreach ($marks as $mark) {
        if (!is_numeric($mark) || $mark < 0 || $mark > 100) {
            $valid = false;
            break;
        }
    }

    if ($valid) {
        calculateResult($marks);
    } else {
        echo "Please enter valid marks between 0 and 100.";
    }
} else {
    echo "Please enter marks for all five subjects.";
}

?>
