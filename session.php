<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select `admin_name`, `admin_id` from admin where `admin_email` = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = mysqli_real_escape_string($db, $row['admin_name']);
   $admin_id = mysqli_real_escape_string($db, $row['admin_id']);
   
   if(!isset($_SESSION['login_user'])){
      header("location:http://localhost/sankarjyoti/index");
      die();
   }
?>