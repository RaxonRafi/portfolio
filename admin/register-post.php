<?php
session_start();
require_once "../db.php";
$register_ability = true;
if(!$_POST['name']){

$_SESSION['name_error']="please enter your name";
$register_ability = false;
}
else{

$_SESSION['old_name'] = $_POST['name'];

}
if(!$_POST['email']){

    $_SESSION['email_error'] = "please enter your email";
    $register_ability = false;
}
else{

    $_SESSION['old_email'] = $_POST['email'];
}
if(!$_POST['password']){

    $_SESSION['password_error'] = "please enter your password";
    $register_ability = false;
}
if(!$_POST['cpassword']){

    $_SESSION['cpass_error'] = "please enter your confirm password";
    $register_ability = false;
}
else{

    if($_POST['password'] != $_POST['cpassword']) {

        $_SESSION['match_error'] = "confirm password doesn't match";
        $register_ability = false;
    }
}

if(!isset ($_POST['gender']) ){

  $_SESSION['gender_error'] = "please enter your gender";
    $register_ability = false;
}
 else {

    $_SESSION['old_gender'] = $_POST['gender'];
}
if($register_ability){
   
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$gender = $_POST['gender'];
$email_address_check_query= "SELECT COUNT(*) AS email_check FROM users WHERE email='$email'";

if(mysqli_fetch_assoc(mysqli_query($my_database, $email_address_check_query))['email_check']==1){

    
    $_SESSION['same_email_error']= "This Email is already taken";
        header('location: register.php');
}
else{
date_default_timezone_set('Asia/Dhaka');
$current_date_time = date('Y-m-d H:i:s');
$insert_query = "INSERT INTO users (name, email, password, gender,created_at) VALUES ('$name','$email','$password','$gender','$current_date_time')";
mysqli_query($my_database,$insert_query);
$_SESSION['register_success'] = "Your registration completed successfully! please login with your email and password";
$_SESSION['registered_email_address'] =$email;
header('location: login.php');
}

} 
else {
    header('location: register.php');

}

?>