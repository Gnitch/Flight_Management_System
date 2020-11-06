<?php
$last_seat = '103B';
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
echo $new_seat;
?>