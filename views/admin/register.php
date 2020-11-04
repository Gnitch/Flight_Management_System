<?php include_once 'header.php'; 
session_start();
?>
<style>

body {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
h3 {
    text-align: center;
    /* font-family: 'Italianno', cursive; */
    font-family: 'Bangers', cursive;      
    font-weight: normal;
    font-size: 60px;
    margin-top: 20px !important;   
}

input {
    margin-bottom: 10px;
    border :0px !important;
    border-bottom: 2px solid #31B0D5 !important;
    color :cornflowerblue !important;
    border-radius: 0px !important;
    font-weight: bold !important;
  }
  label {
    color : #79BAEC !important;      
    font-size: 19px;
  }
.register{
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 60px;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
<?php
if(isset($_GET['error'])) {
    echo '
    <div class="alert text-center alert-danger mb-0"
    style="margin-left: 60px; margin-right:60px;" role="alert">
    ';
    if($_GET['error'] === 'invalidemail') {
        echo 'Invalid email';
    } else if($_GET['error'] === 'pwdnotmatch') {
        echo 'Passwords do not match';
    } else if($_GET['error'] === 'sqlerror') {
        echo 'Invalid credentials';
    } else if($_GET['error'] === 'usernameexists') {
        echo 'Username already exists';
    } else if($_GET['error'] ==='emailexists') {
        echo 'Email already exists';
    }
    echo '</div> ';
}
?>
<link rel="stylesheet" href="../../assets/css/form.css"> 

<?php  if(isset($_SESSION['adminId'])) { ?>

<div class="container-fluid mt-0 register">
<div class="row">
    <div class="col-md-3 register-left">
        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
        <h3>Welcome</h3>
    </div>
    <div class="col-md-9 register-right">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading text-primary">Register New Admin</h3>
                <div class="register-form">
                <form method="POST" action="../../includes/admin/register.inc.php">
                    <div class="conrainer-fluid">
                    <div class="row">
                        <div class="col-1 p-0">
                            <i class="fa fa-user text-primary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" required />                                
                            </div>  
                        </div>
                        <div class="col-1 p-0">
                            <i class="fa fa-lock text-primary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>                        
                        <div class="col">
                            <div class="input-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"            
                                required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter,
                                and at least 8 or more characters" />                                        
                            </div>                                     

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-1 p-0 mr-2">
                            <i class="fa fa-envelope text-primary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>                    
                        <div class="col">
                            <div class="input-group">
                                <label for="email_id">Email</label>
                                <input type="text" name="email_id" id="email_id"
                                        required>                                         
                            </div>                                     
                        </div>
                        <div class="col-1 p-0 mr-2">
                            <i class="fa fa-lock text-primary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>                        
                        <div class="col">
                            <div class="input-group">
                                <label for="password_repeat">Confirm password</label>
                                <input type="password" name="password_repeat" 
                                    id="password_repeat" required>
                            </div>                                     
                        </div>                                                                                                  
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary w-25 mt-5 "
                            style="border-radius:30px;">
                            Register</button>
                    </div>
                    </div>
                </form>
                </div>                        
            </div>
        </div>
    </div>           
</div>
</div>


<?php  } ?>
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
