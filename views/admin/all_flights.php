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
<link rel="stylesheet" href="../../assets/css/admin_index.css">
    <main>
        <?php if(isset($_SESSION['adminId'])) { ?>
          <div class="container-md">
            <h1 class="display-4 text-center">All flights</h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Departure</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Source</th>
                  <th scope="col">Airline</th>
                  <th scope="col">Seats</th>
                  <th scope="col">Price</th>
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
                    <th scope='row'>".$row['flight_id']."</th>
                    <td>".$row['arrivale']."</td>
                    <td>".$row['departure']."</td>
                    <td>".$row['Destination']."</td>
                    <td>".$row['source']."</td>
                    <td>".$row['airline']."</td>
                    <td>".$row['Seats']."</td>
                    <td>₹ ".$row['price']."</td>
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
