<?php include_once 'header.php'; 
require '../../helpers/init_conn_db.php';?>
<link rel="stylesheet" href="../../assets/css/admin.css">
<style>
  body {
    background-color: #C6DBF0;
  }
  p {
  font-size: 45px;
  font-weight: lighter;
  font-family: 'Courier New', Courier, monospace;
  }  
</style>
    <main>
        <?php if(isset($_SESSION['adminId'])) { ?>
          <div class="container">
          <div class="card mt-4" id="flight">
      <div class="card-body">
          <div class="dropdown" style="float: right;">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's flight</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class="text-info">Today's flights</p>
        <table class="table-sm table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airline</th>
            </tr>
          </thead>
          <tbody>              
              <?php
                $curr_date = (string)date('y-m-d');
                $curr_date = '20'.$curr_date;
                $sql = "SELECT * FROM Flight WHERE DATE(departure)=?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_bind_param($stmt,'s',$curr_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  if($row['status']== '') {
                    echo '     
                <tr>         
                <td scope="row">'.$row['flight_id'].'</td>
                <td>'.$row['arrivale'].'</td>
                <td>'.$row['departure'].'</td>
                <td>'.$row['Destination'].'</td>
                <td>'.$row['source'].'</td>
                <td>'.$row['airline'].'</td> 
                <th class="options">
                  <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" 
                      id="dropdownMenuButton" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                      
                      <i class="fa fa-ellipsis-v"></i> </td>
                    </button>  
                    <div class="dropdown-menu">
                      <form class="px-4 py-3"  action="../../includes/admin/admin.inc.php" method="post">
                        <input type="hidden" type="number" name="flight_id" 
                          value='.$row['flight_id'].'>
                        <div class="form-group">
                          <label for="exampleDropdownFormEmail1">Enter time in min.                              
                          </label>
                          <input type="number" class="form-control" name="issue" 
                            placeholder="Eg. 120">
                        </div>  
                        <button type="submit" name="issue_but" 
                          class="btn btn-danger">Submit issue</button>
                        <div class="dropdown-divider"></div>
                        <button type="submit" name="dep_but" 
                          class="btn btn-primary btn-sm">Departed</button>
                      </form>
                    </div>
                  </div>  
                </th>                
              </tr> ' ; }} ?>
          </tbody>
        </table>        
      
      </div>
    </div>

    <div class="card" id="issue">
      <div class="card-body">
          <div class="dropdown" style="float: right;">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's flight</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class=" text-danger">Today's flight issues</p>
        <table class="table-sm table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airline</th>
            </tr>
          </thead>
          <tbody>
              <tr>
              <?php
                $curr_date = (string)date('y-m-d');
                $curr_date = '20'.$curr_date;
                $sql = "SELECT * FROM Flight WHERE DATE(departure)=?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_bind_param($stmt,'s',$curr_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  if($row['status']=='issue') {
                    echo '              
                <td scope="row">'.$row['flight_id'].'</td>
                <td>'.$row['arrivale'].'</td>
                <td>'.$row['departure'].'</td>
                <td>'.$row['Destination'].'</td>
                <td>'.$row['source'].'</td>
                <td>'.$row['airline'].'</td> 
                <th class="options">
                  <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" 
                      id="dropdownMenuButton" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                      
                      <i class="fa fa-ellipsis-v"></i> </td>
                    </button>  
                    <div class="dropdown-menu">
                      <form class="px-4 py-3"  action="../../includes/admin/admin.inc.php" method="post">
                        <input type="hidden" type="number" name="flight_id" 
                          value='.$row['flight_id'].'>  
                        <button type="submit" name="issue_soved_but" 
                          class="btn btn-danger">Issue solved</button>
                      </form>
                    </div>
                  </div>  
                </th>                
              </tr> ' ; }} ?>
          </tbody>
        </table>        
      
      </div>
    </div> 

    <div class="card" id="dep">
      <div class="card-body">
          <div class="dropdown" style="float: right;">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's flight</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class=" text-success">Flight's departed today</p>
        <table class="table-sm table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airline</th>
            </tr>
          </thead>
          <tbody>
              <tr>
              <?php
                $curr_date = (string)date('y-m-d');
                $curr_date = '20'.$curr_date;
                $sql = "SELECT * FROM Flight WHERE DATE(departure)=?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_bind_param($stmt,'s',$curr_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  if($row['status']=='dep') {
                    echo '              
                <td scope="row">'.$row['flight_id'].'</td>
                <td>'.$row['arrivale'].'</td>
                <td>'.$row['departure'].'</td>
                <td>'.$row['Destination'].'</td>
                <td>'.$row['source'].'</td>
                <td>'.$row['airline'].'</td> 
                <th class="options">
                  <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" 
                      id="dropdownMenuButton" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                      
                      <i class="fa fa-ellipsis-v"></i> </td>
                    </button>  
                    <div class="dropdown-menu">
                      <form class="px-4 py-3"  action="../../includes/admin/admin.inc.php" method="post">
                        <input type="hidden" type="number" name="flight_id" 
                          value='.$row['flight_id'].'>  
                        <button type="submit" name="arr_but" 
                          class="btn btn-danger">Arrived</button>
                      </form>
                    </div>
                  </div>  
                </th>                
              </tr> ' ; }} ?>
          </tbody>
        </table>        
      
      </div>
    </div>       

    <div class="card mb-4" id="arr">
      <div class="card-body">
        <div class="dropdown" style="float: right;">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-filter"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#flight">Today's flight</a>
              <a class="dropdown-item" href="#issue">Today's flight issues</a>
              <a class="dropdown-item" href="#dep">Flights departed today</a>
              <a class="dropdown-item" href="#arr">Flights arrived today</a>
            </div>
          </div>        
        <p class=" text-success">Flight's arrived today</p>
        <table class="table-sm table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Arrival</th>
              <th scope="col">Departure</th>
              <th scope="col">Destination</th>
              <th scope="col">Source</th>
              <th scope="col">Airline</th>
            </tr>
          </thead>
          <tbody>
              <tr>
              <?php
                $curr_date = (string)date('y-m-d');
                $curr_date = '20'.$curr_date;
                $sql = "SELECT * FROM Flight WHERE DATE(departure)=?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_bind_param($stmt,'s',$curr_date);
                mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  while ($row = mysqli_fetch_assoc($result)) {
                  if($row['status']=='arr') {
                    echo '              
                <td scope="row">'.$row['flight_id'].'</td>
                <td>'.$row['arrivale'].'</td>
                <td>'.$row['departure'].'</td>
                <td>'.$row['Destination'].'</td>
                <td>'.$row['source'].'</td>
                <td>'.$row['airline'].'</td>                
              </tr> ' ; }} ?>
          </tbody>
        </table>        
      
      </div>
    </div>      
  </div>
<?php } ?>
    </main>
    <?php include_once 'footer.php'; ?>
