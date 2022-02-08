<?php
session_start();
include("../connection.php");


$class_code = $_SESSION['class_code'];

$table_name="classrate";
$rate = $_POST['rate'];




    // insert query
    $sql = "UPDATE $table_name SET rate='$rate' WHERE class_code = '$class_code'";

    if(mysqli_query($con, $sql)){
        header('location: class.php');
    } else{
        echo "<script>alert('Could not update rate. Please try again.');
		    				window.location='class.php';
			    			</script>";
    }

 
// Close connection
mysqli_close($con);


?>
