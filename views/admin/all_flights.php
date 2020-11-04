<?php include_once 'header.php'; ?>
<?php include_once 'footer.php';
require '../../helpers/init_conn_db.php';?>
<?php
if(isset($_POST['del_flight']) and isset($_SESSION['adminId'])) {
  $flight_id = $_POST['flight_id'];
  $sql = 'DELETE FROM Flight WHERE flight_id=?';
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)) {
      header('Location: ../views/index.php?error=sqlerror');
      exit();            
  } else {  
    mysqli_stmt_bind_param($stmt,'i',$flight_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header('Location: all_flights.php');
    exit();
  }
}
?>
<!-- <link rel="stylesheet" href="../../assets/css/admin.css"> -->

<style>
table {
  background-color: white;
}
body {
  background-color: #C6DBF0;
}
th {
  font-size: 25px;
  font-weight: lighter;
  font-family: 'Courier New', Courier, monospace;
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: lighter;
  font-family: 'Courier New', Courier, monospace;  
}
</style>
    <main>
        <?php if(isset($_SESSION['adminId'])) { ?>
          <div class="container-md mt-2">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="text-info" scope="col">ID</th>
                  <th class="text-info" scope="col">Arrival</th>
                  <th class="text-info" scope="col">Departure</th>
                  <th class="text-info" scope="col">Destination</th>
                  <th class="text-info" scope="col">Source</th>
                  <th class="text-info" scope="col">Airline</th>
                  <th class="text-info" scope="col">Seats</th>
                  <th class="text-info" scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM Flight ORDER BY arrivale DESC';
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr>
                    <td scope='row'>".$row['flight_id']."</td>
                    <td>".$row['arrivale']."</td>
                    <td>".$row['departure']."</td>
                    <td>".$row['Destination']."</td>
                    <td>".$row['source']."</td>
                    <td>".$row['airline']."</td>
                    <td>".$row['Seats']."</td>
                    <td>₹ ".$row['Price']."</td>
                    <td>
                    <form action='all_flights.php' method='post'>
                      <input name='flight_id' type='hidden' value=".$row['flight_id'].">
                      <button  class='btn' type='submit' name='del_flight'>
                      <i class='text-danger fa fa-trash'></i></button>
                    </form>
                    </td>
                  </tr>
                  ";
                }
                ?>

              </tbody>
            </table>

          </div>
        <?php } ?>

    </main>
