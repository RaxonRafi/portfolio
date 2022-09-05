<?php
require_once "../db.php";
panda_delete("news","id",$_GET['id']);
header('location: news.php');
?>