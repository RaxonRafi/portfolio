<?php
require_once "../db.php";
panda_delete("testimoials","id",$_GET['id']);
header('location: testimonial.php');
?>