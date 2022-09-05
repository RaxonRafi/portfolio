<?php
require_once "../db.php";
$upload_photo =$_FILES['modal_photo'];
$after_explode = explode('.', $upload_photo['name']);
$new_photo_name = rand().time().".".end($after_explode);
$upload_photo_temporary_location = $upload_photo['tmp_name'];
$new_location = '../img/news/'.$new_photo_name;
move_uploaded_file($upload_photo_temporary_location,$new_location);




$modal_headline= $_POST['modal_headline'];
$news_details= $_POST['news_details'];
//$news_photo = $_POST['news_photo_name'];
date_default_timezone_set('Asia/Dhaka');
$current_date_time = date('Y-m-d H:i:s');
$insert_query = "INSERT INTO news (news_headline, news_details, news_photo_name, news_date_time) VALUES ('$news_headline','$news_details','$new_photo_name','$current_date_time')";
// print_r($insert_query);
// die();
mysqli_query(connect_to_db(), $insert_query);
header('location: news.php');
