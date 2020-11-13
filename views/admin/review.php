<?php include_once 'header.php'; 
require '../../helpers/init_conn_db.php';?>

<style>
body{
  background-image: url('../../assets/images/sky.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;    
}

.checked {
  color: cornflowerblue;
}
h1 {
    font-size: 50px !important;
    font-family: 'product sans';  
    margin-bottom: 20px;  
}
p{
  text-align: center;
}
p.mail {
  font-family: 'product sans';  
  font-size: 35px;
}
p.ans {
  font-size: 18px;
}
p.quest {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
}

</style>
<?php if(isset($_SESSION['adminId'])) { ?>
<main>
<div class="container mt-4 mb-4">
  <h1 class="text-center mb-4 text-light">CUSTOMER REVIEWS</h1>
  <div class="row">
    <?php
    $sql = 'SELECT * FROM Feedback ORDER BY feed_id DESC';
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);                
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) { 
      $arr = [];
      for($i=0;$i<(int)$row['rate'];$i++) {
        array_push($arr,'checked');
      }     
      echo ' 
      <div class="col-md-6">
        <p class="mail">'.$row['email'].'</p>
        <p class="star">
          <span class="fa fa-star fa-lg '.$arr[0].'"></span>
          <span class="fa fa-star fa-lg '.$arr[1].'"></span>
          <span class="fa fa-star fa-lg '.$arr[2].'"></span>
          <span class="fa fa-star fa-lg '.$arr[3].'"></span>
          <span class="fa fa-star fa-lg '.$arr[4].'"></span>        
        </p>
        <p class="quest">What was your first impression when you entered the website?</p>
        <p class="ans">'.$row['q1'].'</p>
        <p class="quest">How did you first hear about us?</p>
        <p class="ans">'.$row['q2'].'</p>
        <p class="quest">Is there anything missing on this page?</p>
        <p class="ans">'.$row['q3'].'</p>
      </div>   ';      
    } ?>
  </div>  
</div>
</main>
<?php } ?>
<?php include_once 'footer.php'; ?>
