<?php
require_once('db.php');
$id = $_GET['id'];
$delete_query = "DELETE FROM contacts WHERE id=$id";
$result_from_db = mysqli_query($my_database, $delete_query);
header('location: massage.php');

?>