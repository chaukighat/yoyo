<?php

$host = "localhost";    /* Host name */
$user = "id2299765_raju";         /* User */
$password = "12345";         /* Password */
$dbname = "id2299765_imgco";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}