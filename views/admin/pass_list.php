<?php include_once 'header.php'; ?>
<?php include_once 'footer.php';
require '../../helpers/init_conn_db.php';?>
<style>
table {
  background-color: white;
}
h1 {
  margin-top: 20px;
  margin-bottom: 20px;
  font-family: 'product sans';  
  font-size: 50px !important; 
  font-weight: lighter;
}
body {
  background-color: #B0E2FF;
}
th {
  font-size: 25px;
  font-weight: lighter;
  font-family: 'Courier New', Courier, monospace;
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  font-family: 'Assistant', sans-serif !important;
}
</style>
    <main>
        <?php if(isset($_SESSION['adminId'])) { ?>
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-primary"
              >Passenger List</h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="text-info" scope="col">First Name</th>
                  <th class="text-info" scope="col">Middle Name</th>
                  <th class="text-info" scope="col">Last Name</th>
                  <th class="text-info" scope="col">Mobile</th>
                  <th class="text-info" scope="col">DOB</th>
                  <th class="text-info" scope="col">Paid By</th>
                  <th class="text-info" scope="col">Amount</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM Passenger_profile WHERE flight_id=?';  
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);  
                $flight_id = $_GET['flight_id'];
                mysqli_stmt_bind_param($stmt,'i',$flight_id);          
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);                
                while ($row = mysqli_fetch_assoc($result)) {

                    $sql_p = 'SELECT * FROM PAYMENT WHERE flight_id=? AND user_id=?';  
                    $stmt_p = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt_p,$sql_p);  
                    mysqli_stmt_bind_param($stmt_p,'ii',$flight_id,$row['user_id']);          
                    mysqli_stmt_execute($stmt_p);
                    $result_p = mysqli_stmt_get_result($stmt_p);                
                    if ($row_p = mysqli_fetch_assoc($result_p)) {
                        echo "                  
                        <tr class='text-center'>
                          <td>".$row['f_name']."</td>
                          <td>".$row['m_name']."</td>
                          <td>".$row['l_name']."</td>
                          <td>".$row['mobile']."</td>
                          <td>".$row['dob']."</td>
                          <td scope='row'>".$row['user_id']."</td>
                          <td>".$row_p['amount']."</td>
                        </tr>
                        ";                        
                    }                    
                }
                ?>

              </tbody>
            </table>

          </div>
        <?php } ?>

    </main>
