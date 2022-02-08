<?php

include("connection.php");

//table name
$table_name="databasepermissions";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// insert query
$sql = "INSERT INTO $table_name (name, email, password, view) VALUES ('$name', '$email', '$password', 'customer')";

if(mysqli_query($con, $sql)){
    header('location: login.php');;
} else{
    echo "<script>alert('Could not create account. Please try again.');
						window.location='signup.php';
						</script>";
}
 
// Close connection
mysqli_close($con);


?>