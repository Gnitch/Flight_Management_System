<?php include_once '../helpers/helper.php'; 
require '../helpers/init_conn_db.php';      ?>
<!-- <link rel="stylesheet" href="../assets/css/pass.css"> -->
<?php subview('header.php'); ?>
<?php
session_start();
$flight_id = 7;
$sql = 'SELECT * FROM Flight WHERE flight_id=?';
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)) {
    header('Location: ../views/index.php');
    exit();            
} else {
    mysqli_stmt_bind_param($stmt,'i',$flight_id);            
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)) {
        $price = $row['Price'];
    } else {
        header('Location: ../views/index.php');
        exit();          
    }
}
if(isset($_GET['error'])) {
    if($_GET['error'] === 'sqlerror') {
        echo '<script>alert("Database error")</script>';
    } else if($_GET['error'] === 'wrngvalue'){
        echo '<script>alert("You entered a wrong value")</script>';
    } 
}
if(isset($_SESSION['userId'])) {   ?>    
    <div class="container">
    <h3>Passenger Deatils</h3>
    <form action="../includes/book-flight.inc.php" method="post" class="main-form mb-4">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">Middlename</label>
                    <input type="text" name="middlename" id="middlename" class="form-control" required>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col">
                <div class="form-group">
                    <label for="mobile">Contact No</label>
                    <input type="number" name="mobile" id="mobile" class="form-control" required>
                </div>
            </div>
          <div class="col">
            <div class="form-group">
              <label class="control-label" for="date">Date</label>
              <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" required type="date"/>
            </div>
          </div>
        </div>

      <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address" class="form-control" id="address" rows="3"></textarea>
      </div>

        <h3>Card Deatils</h3>
        <div class="row">
            <div class="form-group col-12">
                <label for="cardno">Card no.</label>
                <input type="number" class="form-control card_num" name="card_num" required>
            </div>
            <div class="form-group col-md-4">
                <label for="cardtype">Card type</label> 
                <select name="card_type" class="custom-select">
                    <option selected>Select card type</option>                                        
                    <option value="Debit">Debit</option>                    
                    <option value="Credit">Credit</option>                    
                    <option value="master">Master card</option>                    
                </select>                                                           
            </div>            
            <div class="form-group col-md-4">
                <label for="cardexpire">Expiry date</label>
                <input type="date" class="form-control" name="expiry_date" required>        
            </div>            
            <div class="form-group col-md-4">
                <label for="cvv">CVV</label>
                <input type="password" class="form-control" name="cvv" required>        
            </div>               
        </div>               
        <input type="hidden"  name="flight_id" value=<?php echo $flight_id; ?>>
        <input type="hidden"  name="price" value=<?php echo $price; ?>>
        <div class="text-center">
            <button type="submit" name="book_btn" class="btn btn-primary w-25">
                Pay ₹<?php echo $price; ?>
            </button>
        </div>
        
    </form>
    </div>
    <?php } ?>
    <?php subview('footer.php'); ?> 