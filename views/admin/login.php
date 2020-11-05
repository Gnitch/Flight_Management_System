<?php include_once 'header.php'; ?>
<?php
if(isset($_GET['pwd'])) {
    if($_GET['pwd']=='updated') {
        echo "<script>alert('Your password has been reset!!');</script>";
    }
}
?>
<link rel="stylesheet" href="../../assets/css/form.css">
<style>
  body {
    /* padding-top: 20px; */
    background-image: url('../../assets/images/bg6.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;    
  }    
  input {
    border :0px !important;
    border-bottom: 2px solid #31B0D5 !important;
    color :cornflowerblue !important;
    border-radius: 0px !important;
    font-weight: bold !important;
    background-color: whitesmoke !important;    
  }
  *:focus {
    outline: none !important;
  }
  label {
    color : #79BAEC !important;
    font-size: 19px;
  }
  h5.form-name {
    color: cornflowerblue;
    font-family: 'Courier New', Courier, monospace;
    font-weight: 50;
    margin-bottom: 0px !important;
    margin-top: 10px;
  }
  h1 {
    font-size: 65px !important;
    margin-bottom: 20px;  
    font-family :'product sans';
    font-weight: bolder;
  }
  div.form-out {
    /* border-radius: 40px; */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    background-color: whitesmoke !important;
    padding: 40px;
    margin-top: 80px;
  }
  .input-group {
  position: relative;
  display: inline-block;
  width: 100%;
}
  select {
    float: right;
    font-weight: bold !important;
    color :cornflowerblue !important;
  }
  @media screen and (max-width: 900px){
    body {
      background-color: lightblue;
      background-image: none;
    }
    div.form-out {
    padding: 20px;
    background-color: none !important;
    margin-top: 20px;
  }  
}  
</style>
<main>
<div class="container mt-0">
  <div class="row">
    <?php
    if(isset($_GET['error'])) {
        if($_GET['error'] === 'destless') {
            echo "<script>alert('Dest. date/time is less than src.');</script>";
        } else if($_GET['error'] === 'sqlerr') {
          echo "<script>alert('Database error');</script>";
        }
    }
    ?>
      <div class="bg-light form-out col-md-4">
      <h1 class="text-primary text-center">SIGN IN</h1>
      
      <form method="POST" class=" text-center" 
        action="../../includes/admin/login.inc.php">

        <div class="form-row">  
            <div class="col-1 p-0 mr-1">
                <i class="fa fa-user text-primary" 
                    style="float: right;margin-top:35px;"></i>
            </div> 
          <div class="col-10 mb-2">              
            <div class="input-group">
                <label for="user_id">Username/ Email</label>
                <input type="text" name="user_id" id="user_id" required
                   >
              </div>              
          </div>       
          <div class="col-1 p-0 mr-1">
                <i class="fa fa-lock text-primary" 
                    style="float: right;margin-top:35px;"></i>
          </div>                
          <div class="col-10">
            <div class="input-group">
                <label for="user_pass">Password</label>
                <input type="password" name="user_pass" id="user_pass"
                      required>
              </div>            
          </div>          
        </div>              

        <button name="login_but" type="submit" 
          class="btn btn-primary mt-5">
          <div style="font-size: 1.5rem;">
          <i class="fa fa-lg fa-arrow-right"></i>  
          </div>
        </button>
      </form>
    </div>
    </div>
</div>    
</main>



<!-- <div class="flex-container">
    <div class="login-form" style="height: 400px;">
        <h1>Sign in</h1>
        <?php
        if(isset($_GET['error'])) {
            echo '
            <div class="alert text-center alert-danger mb-0"
            style="margin-left: 60px; margin-right:60px;" role="alert">
            ';
            if($_GET['error'] === 'invalidcred') {
                echo 'Invalid Credentials';
            } else if($_GET['error'] === 'wrongpwd') {
                echo 'Wrong Password';
            } else if($_GET['error'] === 'sqlerror') {
                echo 'Invalid credentials';
            }
            echo '</div> ';
        }
        ?>

        <form method="POST" action="../../includes/admin/login.inc.php">
            <div class="flex-container">
                <div>
                    <i class="fa fa-user"></i>
                </div>
                <div>
                    <input type="text" name="user_id" placeholder="username or email-id"
                        class="form-input" required>
                </div>
            </div>
            <div class="flex-container">
                <div>
                    <i class="fa fa-lock"></i>
                </div>
                <div>
                    <input type="password" name="user_pass" class="form-input"
                        placeholder="password" required>
                </div>
            </div>
            <a id="reset-pass" href="reset-pwd.php">reset password</a>
            <div class="submit">
            <button name="login_but" type="submit" class="button">Submit</button>
            </div>
        </form>
    </div>
</div> -->
<?php include_once 'footer.php'; ?>
<script>
$(document).ready(function(){
  $('.input-group input').focus(function(){
    me = $(this) ;
    $("label[for='"+me.attr('id')+"']").addClass("animate-label");
  }) ;
  $('.input-group input').blur(function(){
    me = $(this) ;
    if ( me.val() == ""){
      $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
    }
  }) ;
  // $('#test-form').submit(function(e){
  //   e.preventDefault() ;
  //   alert("Thank you") ;
  // })
});
</script>