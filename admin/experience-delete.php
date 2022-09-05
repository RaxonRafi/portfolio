<?php
require_once "../db.php";
panda_delete("experiences","id",$_GET['id']);
header('location: experience.php');
?>