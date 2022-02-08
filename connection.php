<?php

//connects to host, user, and database
$con = mysqli_connect("localhost","calis1_calis1","password","calis1_PatcoDatabase");
//test connection
if(!$con) {
    die(mysqli_error()."Could not connect to the database.");
}

?>