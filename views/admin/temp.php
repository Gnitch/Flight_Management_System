<?php
require '../../helpers/init_conn_db.php';
$curr_date = (string)date('y-m-d');
$curr_date = '20'.$curr_date;
$sql = "SELECT * FROM Flight WHERE DATE(departure)=?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,'s',$curr_date);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
//   if($row['status']=='issue') {
    echo $row['status'];
    echo '
    <h5 class="card-text">
      Flight-id: '.$row['flight_id'].', Airline: '.$row['airline'].'
      <br>
      <p class="text-danger">Issue: '.$row['ISSUE'].'</p>
    </h5>
    <form action="../../includes/admin/admin.inc.php" method="post">
      <input type="hidden" type="number" name="flight_id" value='.$row['flight_id'].'>
      <button type="submit" name="issue_soved_but" class="btn btn-success btn-sm">Issue solved</button>
    </form>
    <hr class="bg-secondary">
    ';
//   }
}
?>
