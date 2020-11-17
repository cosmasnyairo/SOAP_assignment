<?php

function fetchstudent($admission_no)
{
    echo "<br>";
    echo "<br>";
    echo "Fetched Results";
    echo "<br>";

    $db = mysqli_connect('localhost', 'root', '', 'students');
    $query = "SELECT * FROM students";
    $result = mysqli_query($db, $query);

    $id = "";
    $name =    "";
    $email =    "";
    $phonenumber =   "";
    $address =   "";
    $entrypoints =     "";

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["studentid"] == $admission_no) {
            $id =     $row["studentid"];
            $name =     $row["student_name"];
            $email =    $row["email"];
            $phonenumber =    $row["phonenumber"];
            $address =     $row["student_address"];
            $entrypoints =     $row["entrypoints"];

            echo "<br>";

            echo "Student ID: $id" . "<br>";
            echo "Student Name: $name " . "<br>";
            echo "Email:  $email " . "<br>";
            echo "Phone Number: $phonenumber" . "<br>";
            echo "Student Address: $address " . "<br>";
            echo "Entry Points: $entrypoints " . "<br>";
            echo "<br>";
        }
    }

    mysqli_close($db);
}
