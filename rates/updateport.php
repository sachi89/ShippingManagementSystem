<?php
session_start();
include("../connection.php");


$country = $_SESSION['country'];

$table_name="portrate";
$rate = $_POST['rate'];




    // insert query
    $sql = "UPDATE $table_name SET rate='$rate' WHERE country = '$country'";

    if(mysqli_query($con, $sql)){
        header('location: port.php');
    } else{
        echo "<script>alert('Could not update rate. Please try again.');
		    				window.location='port.php';
			    			</script>";
    }

 
// Close connection
mysqli_close($con);


?>