<?php
session_start();
require_once "../db.php";
$email=$_POST['email'];
$password=md5($_POST['password']);
$count_query = "SELECT COUNT(*) AS login_capability FROM users WHERE email='$email' AND password='$password'";
$output_from_db = mysqli_query(connect_to_db(),$count_query);
$output_from_db_after_assoc = mysqli_fetch_assoc($output_from_db);
if($output_from_db_after_assoc['login_capability']==1){
 $_SESSION['login_status']=true;
 $_SESSION['login_email']= $email;
 $name_select_query="SELECT name FROM users WHERE email='$email'";
 $_SESSION['login_name']=mysqli_fetch_assoc(mysqli_query(connect_to_db(), $name_select_query))['name'];
  header('location: dashboard.php');
}
else{
    $_SESSION['login_error'] =" Your email address or password is incorrect";
    header('location: login.php');
}

?>