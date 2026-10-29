<?php

echo "<h1>Student Information</h1>";

echo "Name: " . $_POST["name"] . "<br><br>";

echo "Password: " . $_POST["password"] . "<br><br>";

echo "Gender: " . $_POST["gender"] . "<br><br>";

echo "Department: " . $_POST["department"] . "<br><br>";

echo "Student ID: " . $_POST["student_id"] . "<br><br>";

if (isset($_FILES["file"])) {

    echo "Uploaded File: " . $_FILES["file"]["name"];

}

?>