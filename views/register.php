<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>

    <main>
        <div class="container">
        <form action="" method="POST">
            <input class="form-control mt-3 ml-3 mr-3 mb-3" type="text" required
                placeholder="Enter username" name="username">

            <input class="form-control ml-3 mr-3 mb-3" type="text" required
                placeholder="Enter Email" name="email_id">

            <input class="form-control ml-3 mr-3 mb-3" type="password" required
                placeholder="Enter password" name="password">

            <input class="form-control ml-3 mr-3 mb-3" type="password" required
                placeholder="Connfirm password" name="password_repeat">

            <button class="btn btn-primary" type="submit">Register</button>
        </form>
        </div>
    </main>
        
<?php subview('footer.php'); ?> 