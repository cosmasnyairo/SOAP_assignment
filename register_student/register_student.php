<?php
session_start();

$studentid = "";
$studentname = "";
$email    = "";
$phonenumber = "";
$address    = "";

$entrypoints = "";

$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'students');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    $studentid = mysqli_real_escape_string($db, $_POST['studentid']);
    $studentname = mysqli_real_escape_string($db, $_POST['studentname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $entrypoints = mysqli_real_escape_string($db, $_POST['entrypoints']);

    // form validation
    if (empty($studentid)) {
        array_push($errors, "Student id is required");
    }
    if (empty($studentname)) {
        array_push($errors, "Studentname is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($phonenumber)) {
        array_push($errors, "Phone number is required");
    }
    if (empty($address)) {
        array_push($errors, "Address is required");
    }
    if (empty($entrypoints)) {
        array_push($errors, "Entry points is required");
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO students (studentid, student_name,email,phonenumber,	student_address	,entrypoints)  
         VALUES ('$studentid', '$studentname', '$email','$phonenumber','$address','$entrypoints')";
        mysqli_query($db, $query);
        header('location: ../server.php');
    }
}
