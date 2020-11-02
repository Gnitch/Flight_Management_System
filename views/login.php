<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<link rel="stylesheet" href="../assets/css/user_login.css">
<?php
if(isset($_GET['pwd'])) {
    if($_GET['pwd']=='updated') {
        echo "<script>alert('Your password has been reset!!');</script>";
    }
}    
?>

    <div class="flex-container">
        <div class="login-form" style="height: 400px;">
            <h1>Sign in</h1>
            <form method="POST" action="../includes/login.inc.php">
                <div class="flex-container">             
                    <div>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="bag">
                        <input   type="text" name="user_id" placeholder="username or email-id" 
                        class="form-input" required>
                    </div>
                </div>
                <div class="flex-container">
                    <div>
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="bag">
                        <input   type="password" name="user_pass" class="form-input" 
                            placeholder="password" required>
                    </div>
                </div>
                <a id="reset-pass" href="reset-pwd.php">reset password</a>
                <div class="submit">
                <button name="login_but" type="submit" class="button">Submit</button>                    
                </div>
            </form>            
            <p class="text">Don't have a account? register <a href="register.php">here</a></p>                
        </div>
    </div>


 <?php subview('footer.php'); ?> 
