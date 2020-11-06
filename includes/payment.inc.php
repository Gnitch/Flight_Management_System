<?php
session_start();
if(isset($_POST['pay_but']) && isset($_SESSION['userId'])) {
    require '../helpers/init_conn_db.php';  
    $flight_id = $_SESSION['flight_id'];
    $price = $_SESSION['price'];
    $passengers = $_SESSION['passengers'];
    $class = $_SESSION['class'];
    $card_no = $_POST['cc-number'];
    $expiry = $_POST['cc-exp'];
    unset($_SESSION['flight_id']);
    unset($_SESSION['passengers']);
    unset($_SESSION['price']);
    unset($_SESSION['class']);      
    $sql = 'INSERT INTO PAYMENT (user_id,expire_date,amount,flight_id,card_no) 
        VALUES (?,?,?,?,?)';            
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header('Location: ../views/payment.php?error=sqlerror-1');
        exit();            
    } else {
        mysqli_stmt_bind_param($stmt,'isiis',$_SESSION['userId'],
            $expiry,$price,$flight_id,$card_no);          
        mysqli_stmt_execute($stmt);        

        $stmt = mysqli_stmt_init($conn);
        $flag = false;
        for($i=1;$i<=$passengers;$i++) {
            $sql = 'SELECT * FROM Flight WHERE flight_id=?';
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)) {
                header('Location: ../views/payment.php?error=sqlerror1');
                exit();            
            } else {
                mysqli_stmt_bind_param($stmt,'i',$flight_id);            
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)) {
                    if($class === 'B') {
                        if($row['last_bus_seat'] === '') {
                            $new_seat = '1A';
                        } else {
                            $last_seat = $row['last_bus_seat'];
                            $ls_len = strlen($last_seat);
                            $seat_num = (int)substr($last_seat,0,$ls_len-1);
                            $seat_alpha = $last_seat[$ls_len-1];
                            if($seat_alpha === 'F') {
                                $seat_num = $seat_num + 1;
                                $seat_alpha = 'A';
                            } else {
                                $seat_alpha = ord($seat_alpha);
                                $seat_alpha = $seat_alpha + 1;
                                $seat_alpha = chr($seat_alpha);
                            }
                            $new_seat = (string)$seat_num . $seat_alpha;                         
                        }
                    } else if($class === 'E') {
                        if($row['last_seat'] === '') {
                            $new_seat = '21A';
                        } else {
                            $last_seat = $row['last_seat'];
                            $ls_len = strlen($last_seat);
                            $seat_num = (int)substr($last_seat,0,$ls_len-1);
                            $seat_alpha = $last_seat[$ls_len-1];
                            if($seat_alpha === 'F') {
                                $seat_num = $seat_num + 1;
                                $seat_alpha = 'A';
                            } else {
                                $seat_alpha = ord($seat_alpha);
                                $seat_alpha = $seat_alpha + 1;
                                $seat_alpha = chr($seat_alpha);
                            }
                            $new_seat = (string)$seat_num . $seat_alpha;                         
                        }
                    }                    
                    if($class === 'B') {
                        $seats = $row['bus_seats'];                    
                        $seats = $seats - 1;
                        $stmt = mysqli_stmt_init($conn);
                        $sql = "UPDATE Flight SET last_bus_seat=?, bus_seats=?
                            WHERE flight_id=?";
                        $temp='/';
                        if(!mysqli_stmt_prepare($stmt,$sql)) {
                            header('Location: ../views/payment.php?error=sqlerror2');
                            exit();            
                        } else {
                            mysqli_stmt_bind_param($stmt,'sii',$new_seat,$seats,$flight_id);         
                            mysqli_stmt_execute($stmt);        
                        }                            
                    } else if($class === 'E') {
                        $seats = $row['Seats'];
                        $seats = $seats - 1;
                        $stmt = mysqli_stmt_init($conn);
                        $sql = 'UPDATE Flight SET last_seat=?, Seats=?
                            WHERE flight_id=?';
                        if(!mysqli_stmt_prepare($stmt,$sql)) {
                            header('Location: ../views/payment.php?error=sqlerror3');
                            exit();            
                        } else {
                            mysqli_stmt_bind_param($stmt,'sii',$new_seat,$seats,$flight_id);         
                            mysqli_stmt_execute($stmt);        
                        }                            
                    }    
                    $stmt = mysqli_stmt_init($conn);
                    $sql = 'SELECT * FROM Passenger_profile WHERE flight_id=? AND
                        user_id=?';
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)) {
                        header('Location: ../views/payment.php?error=sqlerror4');
                        exit();            
                    } else {
                        mysqli_stmt_bind_param($stmt,'ii',$flight_id,$_SESSION['userId']);            
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sql = 'INSERT INTO Ticket (passenger_id,flight_id
                                ,seat_no,cost,class,user_id
                                ) VALUES (?,?,?,?,?,?)';            
                            if(!mysqli_stmt_prepare($stmt,$sql)) {
                                header('Location: ../views/payment.php?error=sqlerror5');
                                exit();            
                            } else {
                                mysqli_stmt_bind_param($stmt,'iisisi',$row['passenger_id'],
                                    $flight_id,$new_seat,$price,$class,$_SESSION['userId']);            
                                mysqli_stmt_execute($stmt);  
                                // Redirect to payment done page
                                exit();
                            }                              
                        } 
                        header('Location: ../views/payment.php?error=sqlerror6');
                        exit();                                             
                    }
                  
                }
                else  {
                    header('Location: ../views/payment.php?error=sqlerror0');
                    exit();                     
                }
            }
        } 

    }            
  
    mysqli_stmt_close($stmt);
    mysqli_close($conn);        

} else {
    header('Location: ../views/payment.php');
    exit();  
}    