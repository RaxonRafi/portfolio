<?php
require_once "../db.php";
 $skill_name = $_POST['skill_name'];
 $percentage = $_POST['percentage'];
$insert_query = "INSERT INTO skills(skill_name, percentage) VALUES ('$skill_name','$percentage')";
mysqli_query(connect_to_db() , $insert_query);
header('location: skill.php')





?>