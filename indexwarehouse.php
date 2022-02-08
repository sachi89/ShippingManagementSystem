<?php
//connection to database
include("connection.php");

//starts session
session_start();

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 

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

            </nav>
            <!-- navigation menu options-->
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="warehouse/warehouseinventory.php">Warehouse Inventory</a>
                        <a class="nav-item nav-link" href="warehouse/warehousereceipt.php">Warehouse Receipts</a>
                        <a class="nav-item nav-link" href="signout.php">Signout</a>
                    </div>
                </div>
          </div>
      </div>
      
    <h1>Hello <?php echo " " .$_SESSION['email']; ?> !</h1>
    
    
    
    
    <!-- footer -->    
    <div class="footer navbar-dark bg-dark">
        <p>Copyright © 2021 The Stakeholders</p>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>