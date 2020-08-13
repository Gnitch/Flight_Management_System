<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    
    </head>
  
    <body>    

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
            
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <?php 
            if(isset($_SESSION['userId'])) {

            } else {
                echo '
                <li class="nav-item">
                <a class="nav-link" href="register.php" >Register</a>
                </li>';
            }
            ?>                   
            </ul>
            <?php 
            if(isset($_SESSION['userId'])) {
                echo '
                <form action="../includes/logout.inc.php" method="POST">
                <button class="btn btn-outline-light m-2" type="submit">
                    Logout</button>  
                </form> ';
            } else {
                echo '
                <form class="form-inline" method="POST" action="../includes/login.inc.php">
                    <input class="form-control text-light bg-dark form-control-sm mr-sm-2"  
                        type="text" placeholder="username/ email" name="user_id"
                        aria-label="username/email" required>

                    <input required  class="bg-dark text-light form-control form-control-sm"
                        type="password" placeholder="password" id="exampleInputPassword1"
                        name="user_pass" >
                    
                    <button class="btn btn-secondary m-2" name="login_but" type="submit">
                        Login</button>
                                  
                </form> ';
            }
            ?>   
        </div>
        </nav>
