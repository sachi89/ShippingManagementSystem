<?php
//connection to database
include("connection.php");

//starts session
session_start();

// remove all session variables
session_unset();


//redirect to login page
header('location: login.php');

?>