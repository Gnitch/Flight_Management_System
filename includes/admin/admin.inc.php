<?php
require '../../helpers/init_conn_db.php';
session_start();
if(isset($_SESSION['adminId'])) {
    if(isset($_POST['dep_but'])) {
        $flight_id = $_POST['flight_id'];
        $sql = "UPDATE Flight SET status='dep' WHERE flight_id=?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,'i',$flight_id);         
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header('Location: ../../views/admin/index.php');
        exit();
    }else if(isset($_POST['issue_but'])) {
        $flight_id = $_POST['flight_id'];
        $issue = $_POST['issue'];
        $delay_min = $_POST['delay_min'];
        $sql = "UPDATE Flight SET status='issue',issue=? WHERE flight_id=?";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,'si',$issue,$flight_id);         
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);;
        header('Location: ../../views/admin/index.php');
        exit();
    } else if(isset($_POST['issue_soved_but'])) {
      $flight_id = $_POST['flight_id'];
      $sql = "UPDATE Flight SET status='',issue='solved' WHERE flight_id=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt,$sql);
      mysqli_stmt_bind_param($stmt,'i',$flight_id);         
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
      header('Location: ../../views/admin/index.php');
      exit();
    } else if(isset($_POST['arr_but'])) {
      $flight_id = $_POST['flight_id'];
      $issue = $_POST['issue'];
      $sql = "UPDATE Flight SET status='arr'WHERE flight_id=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt,$sql);
      mysqli_stmt_bind_param($stmt,'i',$flight_id);         
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
      header('Location: ../../views/admin/index.php');
      exit();
    } else {
        header('Location: ../../views/admin/index.php');
        exit();
    }
}else {
    header('Location: ../../views/admin/index.php');
    exit();
}
