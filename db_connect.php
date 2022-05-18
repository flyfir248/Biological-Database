<?php

 // the four variables
$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "test";
 
// create a sql database object

$mysqli = new mysqli($host, $username,$user_pass,$database_in_use);

?>