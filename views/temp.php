<?php
include '../helpers/init_conn_db.php';                      
$stmt = mysqli_stmt_init($conn);
$sql = 'SELECT * FROM Flight WHERE flight_id=?';
$stmt = mysqli_stmt_init($conn);
// echo $stmt;
if(!mysqli_stmt_prepare($stmt,$sql)) {
    echo 'ERROR';
//     // header('Location: my_flights.php?error=sqlerror');
//     // exit();            
} else {
    // mysqli_stmt_bind_param($stmt,'i',13);            
    // mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     if($row = mysqli_fetch_assoc($result)) {
//         // 2020-11-06 23:15:00
        // $date_time = $row['departure'];
        // $date = substr($date_time,0,10);
        // $time = substr($date_time,10,5) ;
//         echo $date;
//         echo '<br>';
//         echo $time;
//     }
}
?>