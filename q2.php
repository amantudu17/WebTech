<?php

function findGrade($marks)
{
    if ($marks >= 90) {
        return "A";
    }
    else if ($marks >= 80) {
        return "B";
    }
    else if ($marks >= 70) {
        return "C";
    }
    else if ($marks >= 60) {
        return "D";
    }
    else if ($marks >= 50) {
        return "E";
    }
    else {
        return "F";
    }
}

$marks = $_GET["marks"];

$grade = findGrade($marks);

echo "Marks: " . $marks . "<br>";
echo "Grade: " . $grade;

?>