<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Cantarell:ital,wght@1,700&family=Permanent+Marker&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>
<style>
  .navbar-custom {
    background-color: #6495ED;
    font-family: 'Cantarell', sans-serif;
    font-family: 'Permanent Marker', cursive; 
  }
  h4 {
    font-size: 27px !important;
  }
</style>
    <body>
        <nav class="navbar navbar-custom navbar-expand-lg navbar-dark">
          <a class="navbar-brand text-light" href="index.php"><h4>ADMIN PANEL</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <?php
              if(isset($_SESSION['adminId'])) { ?>
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="flight.php">
                      <h4 class="ml-2"> Add Flight</h4>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="all_flights.php">
                      <h4>flights</h4>
                    </a>
                  </li>               
                  <li class="nav-item">
                    <a class="nav-link" href="">
                      <h4>Reviews</h4>
                    </a>
                  </li>                     
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item  p-1 border-light ">
                        <a class="nav-link" href="register.php">
                            <i class="ml-1 fa fa-user text-light"></i>
                            <span class="nav_link text-light"
                              style="font-size: 20px;">
                            <?php echo  $_SESSION['adminUname']; ?>
                            </span>
                        </a>
                    </li>            
                </ul>                 
                <form action="../../includes/logout.inc.php" method="POST">
                <button class="btn btn-outline-light m-2" type="submit">
                    Logout </button>
                </form> 
            </div>
            <?php } ?>

        </nav>
