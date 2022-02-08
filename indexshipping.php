<?php
//starts session
session_start();
//connection to database
include("connection.php");


//session variables from login
$_SESSION['email'];
$_SESSION['password']; 

$email=$_SESSION['email'];
?>


<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- stylesheet -->
    <link rel="stylesheet" href="styles.css">
    
    <title>PATCO - Shipping</title>

  </head>
  <body>
      <!-- navigation bar -->
      <div class="pos-f-t">
            <!-- navigation toggle button -->
            <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span><a class="navbar-brand" href="#">PATCO</a>
            </button>
            
            <!-- shipment tracker search bar-->
            <form class="form-inline" method="post" action="#">
                <input class="form-control mr-sm-2" type="search" placeholder="ID" aria-label="Track Shipment">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Track Shipment</button>
            </form>
            </nav>
            <!-- navigation menu options-->
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="shipping/quoteforms.php">Freight Quote and Booking</a>
                        <a class="nav-item nav-link" href="shipping/shippingpending.php">Orders</a>
                        <a class="nav-item nav-link" href="shipping/screening.php">Screening</a>
                        <a class="nav-item nav-link" href="shipping/generalvehicles.php">Tracking and Visibility</a>
                        <a class="nav-item nav-link" href="signout.php">Signout</a>
                    </div>
                </div>
          </div>
      </div>
      
      <style>
        
        .dashboard {
            width: 50%;
            margin: auto;
            text-align: center;
        
        }
        
        .button-container a {
        
            background: gray;   
            margin: 15px;
            color:white;
            border-radius: 30px;
            padding: 20px;
            width: 125px;
            height: 65px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            overflow: hidden;
            text-decoration: none;
        }
        </style>
        
        <div class="jumbotron">
              <h1 class="display-4">Hello <?php echo $email; ?> !</h1>
              <p class="lead">Welcome to the shipping employee dashboard.</p>
              <hr class="my-4">
              <p>Here are some links to get you started:</p>
              <p class="lead"></p>
                  <br>
                  <br>
            <center>
            <div class="dashboard" >
                <div class="button-container d-flex flex-row">
                   <a class="p-2 bg-dark button" href="shipping/quoteforms.php">Freight Quote and Booking</a>
                   <a class="p-2 bg-dark button" href="shipping/shippingpending.php">Orders</a>
                   <a class="p-2 bg-dark button" href="shipping/screening.php">Screening</a>
                   <a class="p-2 bg-dark button" href="shipping/generalvehicles.php">Tracking and Visibility</a>
                </div>
            </div>
            </center>
            <br>
        </div>
    
    
<?php  
$_SESSION['email']=$email;

include("footer.php");
?>