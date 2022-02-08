<?php
//connection to database
include("connection.php");
include("customerheader.php");

//starts session
session_start();

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 

//put email value from session into variable to use in query
$email=$_SESSION['email'];

//query and store customer id in variable
//use grave accent to get the id attribute from customer_id instead of a string
$query="SELECT `customer_id` FROM customers WHERE email='$email'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$customer_id = $row[0];

//store customer_id variable in session
$_SESSION['customer_id'] = $customer_id;


//put email value back into session
$_SESSION['email']=$email;

?>

      <div class="jumbotron">
              <h1 class="display-4">Hello <?php echo $email; ?> !</h1>
              <p class="lead">Welcome to PATCO Shipping!</p>
              <hr class="my-4">
        </div>
    
    
    
    
<?php  include("footer.php");  ?>