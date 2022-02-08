<?php

include("connection.php"); 

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PATCO SignUp</title>
    <style>
        
         .titlecontainer {
            padding-top: 20px;
             padding-bottom: 20px;
            background: tan;
            color: black;
         }
         .middlecontainer {
             padding:20px;
         }
         .container {
            max-width: 330px;
            padding-top:40px;
            padding: 15px;
            margin: 0 auto;
            border-style: groove;
         }
       
    </style>
  </head>
  <body>
    <div class = titlecontainer><center><h1>PATCO Shipping</h1></center></div>
    <div class=middlecontainer></div>
    <div class = "container">
    <center><h2>Create a Customer Account</h2></center>
    <form method="post" action="insertuser.php">
      <div class="form-group">
        <label for="name">Name or Organization</label>
        <input type="text" class="form-control" name= "name" id="name"  placeholder="Name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" name= "email" id="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
      </div>
      <center><button type="submit" class="btn btn-primary" name="signup">Sign Up</button></center>
    </form>
    <center><a href="login.php">Login</a></center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
