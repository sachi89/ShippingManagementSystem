<?php
session_start();
include("../connection.php");


$freight_type = $_SESSION['freight_type'];

$table_name="freightrate";
$rate = $_POST['rate'];




    // insert query
    $sql = "UPDATE $table_name SET rate='$rate' WHERE freight_type = '$freight_type'";

    if(mysqli_query($con, $sql)){
        header('location: freight.php');
    } else{
        echo "<script>alert('Could not update rate. Please try again.');
		    				window.location='freight.php';
			    			</script>";
    }

 
// Close connection
mysqli_close($con);


?>
