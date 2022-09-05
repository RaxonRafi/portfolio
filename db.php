<?php
function connect_to_db(){
 $username = "root";
 $host_name = "localhost";
 $password = "";
 $database_name = "php";
 return $my_database = mysqli_connect("$host_name", "$username", "$password", "$database_name");
};
function panda_all($table){
 $select_query = "SELECT * FROM $table";
 return $result_from_db = mysqli_query(connect_to_db(), $select_query);
}
function panda_number_of($table , $how_many){
 $select_query = "SELECT * FROM $table ORDER BY id DESC LIMIT $how_many";
 return $result_from_db = mysqli_query(connect_to_db(), $select_query);
}
function panda_delete($table,$field_name,$field_value){
$delete_query = "DELETE FROM $table WHERE $field_name=$field_value";
return mysqli_query(connect_to_db(),$delete_query);
}

?>