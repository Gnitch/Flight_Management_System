<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>

<link rel="stylesheet" href="../assets/css/login.css">
<div class="flex-container">
    <div class="login-form">
        <h1 class="mb-3">Sign up</h1>

        <?php
        if(isset($_GET['error'])) {
            echo '
            <div class="alert text-center alert-danger mb-0" 
            style="margin-left: 60px; margin-right:60px;" role="alert">           
            ';
            if($_GET['error'] == 'invalidemail') {
                echo 'Invalid email';
            } else if($_GET['error'] == 'pwdnotmatch') {
                echo 'Passwords do not match';
            } else if($_GET['error'] == 'sqlerror') {
                echo 'Invalid credentials';
            } else if($_GET['error'] == 'usernameexists') {
                echo 'Username already exists';
            } else if($_GET['error'] == 'emailexists') {
                echo 'Email already exists';
            }              
            echo '</div> ';          
        }
        ?>         
        <form method="POST" action="../includes/register.inc.php">
            <div class="flex-container">
                <div>
                    <i class="fa fa-user"></i>
                </div>
                <div>
                    <input type="text" name="username" placeholder="Enter username" 
                        class="form-input" required>
                </div>
            </div>
            <div class="flex-container">
                <div>
                    <i class="fa fa-envelope"></i>
                </div>
                <div>
                    <input type="text" name="email_id" placeholder="Enter email-id" 
                        class="form-input" required>
                </div>
            </div>            
            <div class="flex-container">
                <div>
                    <i class="fa fa-lock"></i>
                </div>
                <div>
                    <input type="password" name="password" class="form-input" 
                        placeholder="Enter password" 
                        required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Must contain at least one number and one uppercase and lowercase letter, 
                        and at least 8 or more characters">                       
                </div>
            </div>        
            <div class="flex-container">
                <div>
                    <i class="fa fa-lock"></i>
                </div>
                <div>
                    <input type="password" name="password_repeat" class="form-input" 
                        placeholder="Confirm password" required>
                </div>
            </div>
            <div class="text-center w-100 mb-0">
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Your password must be 8-20 characters long,should contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </small>                 
            </div>                         
            <div class="submit">
            <button name="signup_submit" type="submit" class="button mt-2">Submit</button>                    
            </div>
        </form>                            
    </div>
</div>
        
<?php subview('footer.php'); ?> 