<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
<style>
@font-face {
  font-family: 'product sans';
  src: url('../../assets/css/Product Sans Bold.ttf');
}
</style>
    <body>        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><h5>Home</h5></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">
                        <h5> Feedback</h5>
                    </a>
                </li>                  
            <?php if(isset($_SESSION['userId'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <h5> My flights</h5>
                    </a>
                </li>                                       
            <?php } ?>
            </ul>           
            <?php
            if(isset($_SESSION['userId'])) {
                echo '
                <ul style="width: 90px;" class="nav navbar-nav navbar-right">
                    <li class="nav-item active border p-1 border-light ">

                            <i class="ml-1 fa fa-user text-light"></i>
                            <span class="nav_link text-light">
                            '.$_SESSION['userUid'].'
                            </span>
                        </a>
                    </li>            
                </ul>   
                <form action="../includes/logout.inc.php" method="POST">
                <button class="btn btn-outline-light" type="submit">
                    Logout</button>
                </form>  ';
            } else {
                echo '
                <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="login.php">User</a>
                    <a class="dropdown-item" href="admin/login.php">Staff</a>
                </div>
                </div>';
            }
            ?>
        </div>
        </nav>