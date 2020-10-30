<?php include_once 'header.php'; ?>
<?php include_once 'footer.php';
require '../../helpers/init_conn_db.php';?>
<link rel="stylesheet" href="../../assets/css/admin_index.css">
    <main>
        <?php if(isset($_SESSION['adminId'])) { ?>
          <div class="container-md">

            <div class="row">
              <div class="card text-white col-md-6 mb-3">
                <div class="card-header w-100 bg-secondary">
                  <h2 class="card-title">Flight's today</h2></div>
                <div class="card-body bg-dark">
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
                        <h5 class="card-text">
                          Flight-id: '.$row['flight_id'].', Airline: '.$row['airline'].'
                          <br>
                          Arrival: '.$row['arrivale'].', Departure: '.$row['departure'].'
                          <br>
                          Source: '.$row['source'].', Destination: '.$row['Destination'].'
                          <br>
                          Seats: '.$row['Seats'].', Duration: '.$row['duration'].', Fare:
                           ₹'.$row['Price'].'
                        </h5>
                        <form action="../../includes/admin/admin.inc.php" method="post">
                          <input type="hidden" type="number" name="flight_id" value='.$row['flight_id'].'>
                          <button type="submit" name="dep_but" class="btn btn-success btn-sm">Departed</button>
                          <span>
                            <button class="btn btn-danger btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Report Issue
                            </button>
                          </span>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <input type="text" name="issue" placeholder="Enter the issue" class="mb-2" value="">
                                <button type="submit" name="issue_but" class="btn btn-primary btn-sm">submit</button>
                            </div>
                          </div>
                        </form>
                        <hr class="bg-secondary">
                        ';
                      }
                    }
                  ?>

                </div>
              </div>
              <div class="card text-white col-md-6 mb-3">
                <div class="card-header w-100 bg-secondary">
                  <h2 class="card-title">Issues</h2></div>
                <div class="card-body bg-dark">
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
                        <h5 class="card-text">
                          Flight-id: '.$row['flight_id'].', Airline: '.$row['airline'].'
                          <br>
                          <p class="text-danger">Issue: '.$row['issue'].'</p>
                        </h5>
                        <form action="../../includes/admin/admin.inc.php" method="post">
                          <input type="hidden" type="number" name="flight_id" value='.$row['flight_id'].'>
                          <button type="submit" name="issue_soved_but" class="btn btn-success btn-sm">Issue solved</button>
                        </form>
                        <hr class="bg-secondary">
                        ';
                      }
                    }
                  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="card text-white col-md-6 mb-3">
                <div class="card-header w-100 bg-secondary">
                  <h2 class="card-title">Departed</h2></div>
                <div class="card-body bg-dark">
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
                        <h5 class="card-text">
                          Flight-id: '.$row['flight_id'].', Airline: '.$row['airline'].'
                          <br>
                          Arrival: '.$row['arrivale'].', Departure: '.$row['departure'].'
                          <br>
                          Source: '.$row['source'].', Destination: '.$row['Destination'].'
                          <br>
                          Seats: '.$row['Seats'].', Duration: '.$row['duration'].', Fare:
                           ₹'.$row['Price'].'
                        </h5>
                        <form action="../../includes/admin/admin.inc.php" method="post">
                          <input type="hidden" type="number" name="flight_id" value='.$row['flight_id'].'>
                          <button type="submit" name="arr_but" class="btn btn-success btn-sm">Arrived</button>
                        </form>
                        <hr class="bg-secondary">
                        ';
                      }
                    }
                  ?>
                </div>
              </div>

              <div class="card text-white col-md-6 mb-3">
                <div class="card-header w-100 bg-secondary">
                  <h2 class="card-title">Arrived</h2></div>
                <div class="card-body bg-dark">
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
                        <h5 class="card-text">
                          Flight-id: '.$row['flight_id'].', Airline: '.$row['airline'].'
                          <br>
                          Arrival: '.$row['arrivale'].', Departure: '.$row['departure'].'
                          <br>
                          Source: '.$row['source'].', Destination: '.$row['Destination'].'
                          <br>
                          Seats: '.$row['Seats'].', Duration: '.$row['duration'].', Fare:
                           ₹'.$row['Price'].'
                        </h5>
                        <hr class="bg-secondary">
                        ';
                      }
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

    </main>
