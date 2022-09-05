<?php
require_once "../db.php";
panda_delete("modals","id",$_GET['id']);
header('location: modal.php');
