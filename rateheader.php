<?php
include("connection.php");
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
    <title>PATCO - Rate Management</title>

  </head>
  <body>
      <!-- navigation bar -->
      <div class="pos-f-t">
            <!-- navigation toggle button -->
            <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent">
                <span class="navbar-toggler-icon"></span><a class="navbar-brand" href="#">PATCO</a>
            </button>
            </nav>
            <!-- navigation menu options-->
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active text-white" href="indexrate.php">Home<span class="sr-only">(current)</span></a>
                        <li class="nav-item dropdown"> <!-- bootstrap dropdown nav for paintings -->
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown">
                              Rate Management
                            </a>
                            <div class="dropdown-menu text-light bg-dark">
                              <a class="dropdown-item text-light bg-dark" href="rates/class.php">Freight Class</a>
                              <a class="dropdown-item text-light bg-dark" href="rates/freight.php">Freight Type</a>
        					  <a class="dropdown-item text-light bg-dark" href="rates/zone.php">Zone</a>
        					  <a class="dropdown-item text-light bg-dark" href="rates/port.php">Port</a>
                            </div>
                        </li>
                        <a class="nav-item nav-link text-white" href="signout.php">Signout</a>
                    </div>
                </div>
          </div>
      </div>