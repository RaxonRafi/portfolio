<?php
require_once "../db.php";
 $name = $_POST['name'];
$description = $_POST['description'];
$post = $_POST['post'];
$insert_query = "INSERT INTO testimonials(name,post,description) VALUES ('$name','$post','$description')";
mysqli_query(connect_to_db() , $insert_query);
header('location: testimonial.php')
?>