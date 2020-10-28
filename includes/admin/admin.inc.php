<?php
require '../../helpers/init_conn_db.php';
session_start();
if(isset($_SESSION['adminId'])) {
    if(isset($_POST['dep_but'])) {
        $flight_id = $_POST['flight_id'];
        $sql = "UPDATE Flight SET status='dep' WHERE flight_id=:id_bv";
        $stmt = oci_parse($conn,$sql);
        oci_bind_by_name($stmt,":id_bv",$flight_id);
        oci_execute($stmt);
        oci_free_statement($stmt);
        oci_close($conn);
        header('Location: ../../views/admin/index.php');
        exit();
    }else if(isset($_POST['issue_but'])) {
        $flight_id = $_POST['flight_id'];
        $issue = $_POST['issue'];
        $sql = "UPDATE Flight SET status='issue',issue=:issue_bv WHERE flight_id=:id_bv";
        $stmt = oci_parse($conn,$sql);
        oci_bind_by_name($stmt,":id_bv",$flight_id);
        oci_bind_by_name($stmt,":issue_bv",$issue);
        oci_execute($stmt);
        oci_free_statement($stmt);
        oci_close($conn);
        header('Location: ../../views/admin/index.php');
        exit();
    } else if(isset($_POST['issue_soved_but'])) {
      $flight_id = $_POST['flight_id'];
      $sql = "UPDATE Flight SET status=''WHERE flight_id=:id_bv";
      $stmt = oci_parse($conn,$sql);
      oci_bind_by_name($stmt,":id_bv",$flight_id);
      oci_execute($stmt);
      oci_free_statement($stmt);
      oci_close($conn);
      header('Location: ../../views/admin/index.php');
      exit();
    } else if(isset($_POST['arr_but'])) {
      $flight_id = $_POST['flight_id'];
      $issue = $_POST['issue'];
      $sql = "UPDATE Flight SET status='arr'WHERE flight_id=:id_bv";
      $stmt = oci_parse($conn,$sql);
      oci_bind_by_name($stmt,":id_bv",$flight_id);
      oci_execute($stmt);
      oci_free_statement($stmt);
      oci_close($conn);
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
