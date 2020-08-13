<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>

    <main>
        <h1 class="display-4 text-info text-center">Welcome !!!</h1>
        <?php 
            if(isset($_SESSION['userId'])) {
                echo '<h3 class="text-success text-center login-status">'.
                    $_SESSION['userUid'].' Logged in</h3>';

            } else {
                echo '<h3 class="text-warning text-center login-status">Logged out</h3>';
            }
        ?>        
    </main>
        
<?php subview('footer.php'); ?> 