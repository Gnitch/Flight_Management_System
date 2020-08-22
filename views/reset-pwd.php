<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<link rel="stylesheet" href="../assets/css/login.css">
<div class="flex-container">
    <div class="login-form" style="height: 400px;">
        <h2 class="display-4 text-center">Reset Password</h2>
        <div class="alert text-center alert-info mb-0" 
            style="margin-left: 60px; margin-right:60px;" role="alert">   
            An email will be send to you with the instructions on how to reset the password.
        </div>
        <form method="POST" action="../includes/reset-request.inc.php">            
            <div class="flex-container">             
                <div>
                    <i class="fa fa-envelope"></i>
                </div>
                <div>
                    <input type="text" name="user_email" 
                        placeholder="Enter your email address" class="form-input" required>
                </div>
            </div>
            <div class="submit">
            <button name="reset-req-submit" type="submit" class="button">
                Submit</button>                    
            </div>
        </form>                          
    </div>
</div>
<?php
if(isset($_GET['err']) || isset($_GET['mail'])) {
    if($_GET['err'] === 'invalidemail') {
        echo '<script>alert("Invalid email");</script>';
    } else if($_GET['err'] === 'sqlerr') {
        echo '<script>alert("An error occured");</script>';        
    } else if($_GET['mail'] === 'success') {
        echo '<script>alert("Email has been succesfully sent to you");</script>';        
    } else if($_GET['err'] === 'mailerr') {
        echo '<script>alert("An error occured");</script>';        
    }                    
} 
?>
<?php subview('footer.php'); ?> 

