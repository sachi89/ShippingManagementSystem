<?php
session_start();
include("../connection.php");


$zone = $_SESSION['zone'];

$table_name="zonerate";
$rate = $_POST['rate'];




    // insert query
    $sql = "UPDATE $table_name SET rate='$rate' WHERE zone = '$zone'";

    if(mysqli_query($con, $sql)){
        header('location: zone.php');
    } else{
        echo "<script>alert('Could not update rate. Please try again.');
		    				window.location='zone.php';
			    			</script>";
    }

 
// Close connection
mysqli_close($con);


?>