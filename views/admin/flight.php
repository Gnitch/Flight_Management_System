<?php include_once 'header.php'; ?>
<?php include_once 'footer.php'; ?>
<?php require '../../helpers/init_conn_db.php'; ?>

<link rel="stylesheet" href="../../assets/css/flight.css">
<?php if(isset($_SESSION['adminId'])) { ?>
<div class="flex-container">
    <div class="login-form" style="height:137vh">
        <h3>Add Flight</h3>
        <?php
        if(isset($_GET['error'])) {
            echo '
            <div class="alert text-center alert-danger mb-0"
            style="margin-left: 60px; margin-right:60px;" role="alert">
            ';
            if($_GET['error'] === 'destless') {
                echo 'Dest. date/time is less than src.';
            } else if($_GET['error'] === 'sqlerr') {
                echo 'Database error';
            }
            echo '</div> ';
        }
        ?>

        <form method="POST" action="../../includes/admin/flight.inc.php">
            <div class="flex-container">
                <div>
                    <?php
                      $sql = 'SELECT * FROM Airline ';
                      $stmt = mysqli_stmt_init($conn);
                      mysqli_stmt_prepare($stmt,$sql);         
                      mysqli_stmt_execute($stmt);          
                      $result = mysqli_stmt_get_result($stmt);    
                      echo '<select class="custom-select" name="airline">
                        <option selected>Select Airline</option>';
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value='. $row['airline_id']  .'>'. 
                          $row['name'] .'</option>';
                      }
                    ?>
                  </select>
                </div>
            </div>
            <div class="flex-container">
                <div>
                  <h4 class="text-center text-info mt-2">Source</h4>
                  <input type="date" name = "source_date" class="form-control mt-2"
                  required >
                  <input type="time" name = "source_time" class="form-control mt-4"
                  required >

                  <h4 class="text-center text-info mt-2">Destination</h4>
                  <input type="date" name = "dest_date" class="form-control mt-2"
                   required >
                  <input type="time" name = "dest_time" class="form-control mt-4"
                  required >
                  <input type="text" name="dura" placeholder="Enter duration"
                    class="form-control form-input" required >

                  <input type="text" name="dep_city" placeholder="Enter departure city"
                    class="form-control form-input" required >

                  <input type="text" name="arr_city" placeholder="Enter arrivale city"
                    class="form-control form-input" required >

                  <input type="number" name="price" placeholder="Enter price"
                    class="form-control form-input" required >
                </div>
            </div>
            <div class="submit">
              <button name="flight_but" type="submit" class="button">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php } ?>
