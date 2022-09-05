<?php
require_once "../db.php";
panda_delete("services","id",$_GET['id']);
header('location: services.php');
?>
