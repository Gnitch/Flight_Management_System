<?php
require '../helpers/init_conn_db.php';   
session_start();
if(isset($_POST['book_btn']) && isset($_SESSION['userId'])) {
    $flight_id = $_POST['flight_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $card_num = $_POST['card_num'];
    $card_type = $_POST['card_type'];
    $expiry_date = $_POST['expiry_date'];
    $price = $_POST['price'];
    $sql = "INSERT INTO Passenger_profile (user_id,mobile,address,dob,f_name,m_name,l_name) 
        VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header('Location: ../views/passenger.php?error=sqlerror1');
        exit();            
    } else {
        mysqli_stmt_bind_param($stmt,'sssssss',$_SESSION['userId'],$mobile,$address,
        $date,$firstname,$middlename,$lastname);            
        mysqli_stmt_execute($stmt);  
        $sql = "INSERT INTO PAYMENT VALUES (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header('Location: ../views/passenger.php?error=sqlerror');
            exit();            
        } else {
            mysqli_stmt_bind_param($stmt,'sssss',$_SESSION['userId'],$card_type,$expiry_date,
            $price,$card_num);            
            mysqli_stmt_execute($stmt);  
            header('Location: ../views/index.php?msg=success');
            exit();              
        }        
    }
} else {
    header('Location: ../views/index.php');
    exit();     
}
