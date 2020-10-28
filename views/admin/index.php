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
                    $curr_date = (string)date('d-m');
                    $sql = "SELECT * FROM Flight WHERE (TO_CHAR(DEPARTURE,'DD-MM')
                      =:date_bv)";
                    $stmt = oci_parse($conn,$sql);
                    oci_bind_by_name($stmt,":date_bv",$curr_date);
                    oci_execute($stmt);
                    while (($row = oci_fetch_assoc($stmt)) != false) {
                      if(!isset($row['STATUS'])) {
                        echo '
                        <h5 class="card-text">
                          Flight-id: '.$row['FLIGHT_ID'].', Airline: '.$row['AIRLINE'].'
                          <br>
                          Arrival: '.$row['ARRIVALE'].', Departure: '.$row['DEPARTURE'].'
                          <br>
                          Source: '.$row['SOURCE'].', Destination: '.$row['DESTINATION'].'
                          <br>
                          Seats: '.$row['SEATS'].', Duration: '.$row['DURATION'].', Fare:
                           ₹'.$row['PRICE'].'
                        </h5>
                        <form action="../../includes/admin/admin.inc.php" method="post">
                          <input type="hidden" type="number" name="flight_id" value='.$row['FLIGHT_ID'].'>
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
                    $curr_date = (string)date('d-m');
                    $sql = "SELECT * FROM Flight WHERE (TO_CHAR(DEPARTURE,'DD-MM')
                      =:date_bv)";
                    $stmt = oci_parse($conn,$sql);
                    oci_bind_by_name($stmt,":date_bv",$curr_date);
                    oci_execute($stmt);
                    while (($row = oci_fetch_assoc($stmt)) != false) {
                      if($row['STATUS']=='issue') {
                        echo '
                        <h5 class="card-text">
                          Flight-id: '.$row['FLIGHT_ID'].', Airline: '.$row['AIRLINE'].'
                          <br>
                          <p class="text-danger">Issue: '.$row['ISSUE'].'</p>
                        </h5>
                        <form action="../../includes/admin/admin.inc.php" method="post">
                          <input type="hidden" type="number" name="flight_id" value='.$row['FLIGHT_ID'].'>
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
                    $curr_date = (string)date('d-m');
                    $sql = "SELECT * FROM Flight WHERE (TO_CHAR(DEPARTURE,'DD-MM')
                      =:date_bv)";
                    $stmt = oci_parse($conn,$sql);
                    oci_bind_by_name($stmt,":date_bv",$curr_date);
                    oci_execute($stmt);
                    while (($row = oci_fetch_assoc($stmt)) != false) {
                      if($row['STATUS']=='dep') {
                        echo '
                        <h5 class="card-text">
                          Flight-id: '.$row['FLIGHT_ID'].', Airline: '.$row['AIRLINE'].'
                          <br>
                          Arrival: '.$row['ARRIVALE'].', Departure: '.$row['DEPARTURE'].'
                          <br>
                          Source: '.$row['SOURCE'].', Destination: '.$row['DESTINATION'].'
                          <br>
                          Seats: '.$row['SEATS'].', Duration: '.$row['DURATION'].', Fare:
                           ₹'.$row['PRICE'].'
                        </h5>
                        <form action="../../includes/admin/admin.inc.php" method="post">
                          <input type="hidden" type="number" name="flight_id" value='.$row['FLIGHT_ID'].'>
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
                    $curr_date = (string)date('d-m');
                    $sql = "SELECT * FROM Flight WHERE (TO_CHAR(DEPARTURE,'DD-MM')
                      =:date_bv)";
                    $stmt = oci_parse($conn,$sql);
                    oci_bind_by_name($stmt,":date_bv",$curr_date);
                    oci_execute($stmt);
                    while (($row = oci_fetch_assoc($stmt)) != false) {
                      if($row['STATUS']=='arr') {
                        echo '
                        <h5 class="card-text">
                          Flight-id: '.$row['FLIGHT_ID'].', Airline: '.$row['AIRLINE'].'
                          <br>
                          Arrival: '.$row['ARRIVALE'].', Departure: '.$row['DEPARTURE'].'
                          <br>
                          Source: '.$row['SOURCE'].', Destination: '.$row['DESTINATION'].'
                          <br>
                          Seats: '.$row['SEATS'].', Duration: '.$row['DURATION'].', Fare:
                           ₹'.$row['PRICE'].'
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
