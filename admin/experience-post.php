<?php
require_once "../db.php";
$company_name= $_POST['company_name'];
$duration= $_POST['duration'];
$designation= $_POST['designation'];
$description=  htmlspecialchars($_POST['description'],ENT_QUOTES);
$insert_query = "INSERT INTO experiences (company_name, duration, designation, description) VALUES ('$company_name','$duration','$designation','$description')";
mysqli_query(connect_to_db(), $insert_query);
header('location: experience.php');
?>