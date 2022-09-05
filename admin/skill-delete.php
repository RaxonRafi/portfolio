<?php
require_once "../db.php";
panda_delete("skills","id",$_GET['id']);
header('location: skill.php');
?>