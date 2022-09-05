<?php
require_once "../db.php";
 $service_name = $_POST['service_name'];
$description = $_POST['description'];
$service_icon = $_POST['service_icon'];
$insert_query = "INSERT INTO services(service_name,description,service_icon) VALUES ('$service_name','$description','$service_icon')";
mysqli_query(connect_to_db() , $insert_query);
header('location: service.php')
?>