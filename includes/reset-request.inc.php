<?php
if(isset($_POST['login_but'])) {

    require '../helpers/init_conn_db.php';   
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = 'localhost/create-new-pwd.php?selector='.$selector.'validator='
        .bin2hex($token);
    $expires = date('U')+1800;
    $user_email = $_POST['user_email'];
    $sql = 'DELETE FROM PwdReset WHERE pwd_reset_email=?;';
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        echo '<script>alert("An error occured")</script>';        
        exit();            
    } else {
        mysqli_stmt_bind_param($stmt,'s',$user_email);            
        mysqli_stmt_execute($stmt);
    }     

    $sql = 'INSERT INTO PwdReset (pwd_reset_email,pwd_reset_selector,pwd_reset_token,
    pwd_reset_expires) VALUES (?,?,?,?);';
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        echo '<script>alert("An error occured")</script>';        
        exit();            
    } else {
        $token_hash = password_hash($token,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,'ssss',$user_email,$selector,$token_hash,$expires);            
        mysqli_stmt_execute($stmt);
    } 

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require_once "../vendor/autoload.php";
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';    

    $mail = new PHPMailer();
    $mail->IsSMTP(true);
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "your-email@gmail.com";
    $mail->Password   = "your-gmail-password";
    $mail->IsHTML(true);
    $mail->AddAddress("recipient-email@domain", "recipient-name");
    $mail->SetFrom("from-email@gmail.com", "from-name");
    $mail->Subject = "Reset your password for your_site_name";
    $content = "
        <p>We receieved a password reset request, ignore if you did not issue a request</p> 
    ";
    $content .= '<p>Your password reset link:</br>';
    $content .='<a href="'.$url.'">'.$url.'</a></p>';                 

    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
      echo '<script>alert("Error while sending Email.")</script>';      
      var_dump($mail);
    } else {
      echo '<script>alert("Email send succesfully")</script>';              
    }    

} else {
    header('Location: ../views/reset-pwd.php');    
} 


