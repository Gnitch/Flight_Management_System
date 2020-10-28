<?php include_once 'header.php'; ?>
<?php include_once 'footer.php'; ?>
<link rel="stylesheet" href="../../assets/css/login.css">
<?php
if(isset($_GET['pwd'])) {
    if($_GET['pwd']=='updated') {
        echo "<script>alert('Your password has been reset!!');</script>";
    }
}
?>
<div class="flex-container">
    <div class="login-form" style="height: 450px;">
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
</div>
