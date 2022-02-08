<?php
//starts session
session_start();

//connection to database
include("connection.php");
include("rateheader.php");

//session variables from login
$_SESSION['email'];
$_SESSION['password']; 


$email=$_SESSION['email'];
?>

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
              <p class="lead">Welcome to the rate management dashboard.</p>
              <hr class="my-4">
              <p>Here are some links to get you started:</p>
              <p class="lead"></p>
                  <br>
                  <br>
            <center>
            <div class="dashboard" >
                <div class="button-container d-flex flex-row">
                   <a class="p-2 bg-dark button" href="rates/class.php">Freight Class</a>
                   <a class="p-2 bg-dark button" href="rates/freight.php">Freight Type</a>
                   <a class="p-2 bg-dark button" href="rates/zone.php">Zone</a>
                   <a class="p-2 bg-dark button" href="rates/port.php">Port</a>
                </div>
            </div>
            </center>
            <br>
        </div>
    </body>
</html>

<?php  
$_SESSION['email']=$email;

include("footer.php");
?>