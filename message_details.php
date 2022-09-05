<?php
require_once "header.php";
require_once "db.php";

$id = $_GET['id'];
$select_query = "SELECT * FROM contacts WHERE id=$id";
$result_from_db = mysqli_query($my_database, $select_query);
$result_after_assoc = mysqli_fetch_assoc($result_from_db);


?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header bg-primary">
                    <h5 class="card-title text-light">Message sent by</h5>
                    <p class="card-text text-light"><?= $result_after_assoc['First_name'] . " " . $result_after_assoc['Last_name'] ?></p>

                </div>
                <div class="card-body">
                    <table class="table">

                        <tbody>
                            <tr>
                                <td>Phone Number</td>
                                <td><?= $result_after_assoc['Phone_Number'] ?></td>
                            </tr>
                            <tr>

                                <td>Email Address</td>
                                <td><?= $result_after_assoc['Email_address'] ?></td>

                            </tr>
                            <tr>

                                <td>Message</td>
                                <td><?=$result_after_assoc['massage']?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>