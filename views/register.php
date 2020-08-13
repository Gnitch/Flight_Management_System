<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>

    <main>
        <div class="container text-center">
        <form action="../includes/register.inc.php" method="POST">
            <input class="form-control mt-3 ml-3 mr-3 mb-3" type="text" required
                placeholder="Enter username" name="username">

            <input class="form-control ml-3 mr-3 mb-3" type="text" required
                placeholder="Enter Email" name="email_id">

            <input class="form-control ml-3 mr-3 mb-3" type="password" required
                placeholder="Enter password" name="password">

            <input class="form-control ml-3 mr-3 mb-3" type="password" required
                placeholder="Connfirm password" name="password_repeat">

            <button class="btn btn-primary" name="signup_submit" type="submit">
                Register</button>
        </form>
        <span class="text-center text-danger">
        <?php
        if(isset($_GET['error'])) {
            if($_GET['error'] == 'invalidemail') {
                echo 'Invalid Email';
            } else if($_GET['error'] == 'pwdnotmatch') {
                echo 'Passwords do not match';
            } else if($_GET['error'] == 'sqlerror') {
                echo 'Invalid credentials';
            } else if($_GET['error'] == 'usernameexists') {
                echo 'Username already exists';
            } else if($_GET['error'] == 'emailexists') {
                echo 'Email already exists';
            }            
        }
        ?>
        </span>
        </div>
    </main>
        
<?php subview('footer.php'); ?> 