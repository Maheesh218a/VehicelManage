<?php
session_start();
require "connection.php";
$email = $_SESSION["u"]["username"];
//echo ("OK");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$cNumber = $_POST["cNumber"];
$vNumber = $_POST["vNumber"];

if (empty($fname)) {
    echo ("Please Enter First Name");
} elseif (strlen($fname) > 45) {
    echo ("First Name Must Have only 45 Characters");
} elseif (empty($lname)) {
    echo ("Please Enter Last Name");
} elseif (strlen($lname) > 45) {
    echo ("Last Name Must Have only 45 Characters");
} elseif (empty($cNumber)) {
    echo ("Please Enter Contact Number");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $cNumber)) {
    echo ("Invalid Mobile Number!");
} else if (strlen($cNumber) != 10) {
    echo ("Contact Number must contain 10 characters");
} elseif (empty($vNumber)) {
    echo ("Please Enter Vehicle Number");
} else if (strlen($vNumber) > 10) {
    echo ("Vehicle Number Must Have only 10 Characters");
} else {

    Database::search("INSERT INTO job_save (`f_name`,`l_name`,`contact_no`,`vehicle_no`)
    VALUES ('" . $fname . "','" . $lname . "','" . $cNumber . "','" . $vNumber . "')");

    echo ("success");
}
