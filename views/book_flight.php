<?php include_once '../helpers/helper.php'; ?>
<?php subview('header.php'); 
require '../helpers/init_conn_db.php';                      
?> 	
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
<style>
table {
  background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color:cornflowerblue ;
	font-size:42px !important;
	margin-top:20px;
	text-align:center;
}
body {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
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
  /* color: #3931af; */
  color: cornflowerblue;
}
</style>
    <main>
        <?php if(isset($_POST['search_but'])) { 
            $dep_date = $_POST['dep_date'];                        
            $ret_date = $_POST['ret_date'];  
            $dep_city = $_POST['dep_city'];  
            $arr_city = $_POST['arr_city'];     
            $type = $_POST['type'];
            $f_class = $_POST['f_class'];
            $passengers = $_POST['passengers'];
            if($dep_city === $arr_city){
              header('Location: ../views/index.php?error=sameval');
              exit();    
            }
            if($dep_city === '0') {
              header('Location: ../views/index.php?error=seldep');
              exit(); 
            }
            if($arr_city === '0') {
              header('Location: ../views/index.php?error=selarr');
              exit();              
            }
            ?>
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-light"
              >FLIGHT'S FROM <br> <?php echo $dep_city; ?> 
                 TO <br> <?php echo $arr_city; ?> </h1>
            <table class="table table-striped">
              <thead>
                <tr class="text-center">
                  <th class="text-info" scope="col">Airline</th>
                  <th class="text-info" scope="col">Departure</th>
                  <th class="text-info" scope="col">Arrival</th>
                  <th class="text-info" scope="col">Status</th>
                  <th class="text-info" scope="col">Fare</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM Flight WHERE source=? AND Destination =? AND 
                    DATE(departure)=? ORDER BY Price';
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_bind_param($stmt,'sss',$dep_city,$arr_city,$dep_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  $price = (int)$row['Price']*(int)$passengers;
                  if($type === 'round') {
                    $price = $price*2;
                  }
                  if($f_class == 'B') {
                      $price += 0.5*$price;
                  }
                  if($row['status']==='') {
                      $status = 'Not yet departed';
                  } else if($row['status']==='dep') {
                    $status = 'Departed';
                  } else if($row['status']==='arr') {
                    $status = 'Arrived';
                  } else if($row['status']==='issue' || $row['issue']==='solved') {
                    $status = 'Delayed';
                  }
                  echo "
                  <tr class='text-center'>                  
                    <td>".$row['airline']."</td>
                    <td>".$row['departure']."</td>
                    <td>".$row['arrivale']."</td>
                    <td>".$status."</td>
                    <td>₹ ".$price."</td>
                    ";
                  if(isset($_SESSION['userId'])) {   
                    echo " <td>
                    <form action='pass_form.php' method='post'>
                    <input name='flight_id' type='hidden' value=".$row['flight_id'].">
                      <input name='type' type='hidden' value=".$type.">
                      <input name='passengers' type='hidden' value=".$passengers.">
                      <input name='price' type='hidden' value=".$price.">
                      <input name='ret_date' type='hidden' value=".$ret_date.">
                      <input name='class' type='hidden' value=".$f_class.">
                      <button name='book_but' type='submit' 
                      class='btn btn-primary mt-0'>
                      <div style=''>
                      <i class='fa fa-lg fa-arrow-right'></i>  
                      </div>
                    </button>
                    </form>
                    </td>                                                       
                    "; 
                  }
                  echo '</tr> ';                 
                }
                ?>

              </tbody>
            </table>

          </div>
        <?php } ?>

    </main>
