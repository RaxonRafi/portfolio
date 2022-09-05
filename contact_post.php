<?php

use Elementor\Core\DocumentTypes\Post;

require_once "db.php";

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$Email_address = $_POST['Email_address'];
$Phone_Number = $_POST['Phone_Number'];
$massage = $_POST['massage'];

if($First_name && $Last_name && $Email_address && $Phone_Number && $massage){
 

    if(strlen($Phone_Number) == 11){

    $db_query = "INSERT INTO contacts ( First_name, Last_name, Email_address, Phone_Number, massage) VALUES ( '$First_name', '$Last_name', '$Email_address', '$Phone_Number', '$massage');";

   mysqli_query($my_database, $db_query);

    header('location: massage.php');

    }
    else{
        echo "Phone number is not correct";
    }


}
else{

    echo "something is missing";
}




?>