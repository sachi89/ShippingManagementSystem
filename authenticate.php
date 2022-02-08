<?php
include("connection.php");

//table name
$table_name="databasepermissions";
//email from login form
$email=$_POST['email'];
//password from login form
$password=$_POST['password'];
 

//query
$sql="SELECT * FROM $table_name WHERE email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
//count table row
if(mysqli_num_rows($result) > 0){
$rows = mysqli_fetch_assoc($result);
 
 
//redirect pages with different views
if ($rows['view'] == 'shipping') {
	header('location: indexshipping.php');
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
 
}
else
if ($rows['view'] == 'warehouse') {
	header('location: indexwarehouse.php');
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password; 
 
} 
else
if ($rows['view'] == 'customer') {
	header('location: indexcustomer.php'); 
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
 
} 
else
if ($rows['view'] == 'rate') {
	header('location: indexrate.php');
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
 
} 
else
if ($rows['view'] == 'accountant') {
	header('location: accountant/indexAccountant.php');
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
 
} 
}
else
{ 
	//login error
echo "<script>alert('You do not have access to this website. Please try again or create an account.');
        	window.location='login.php';
	  </script>";
}
 // Close connection
mysqli_close($con);
 
?>