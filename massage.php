<?php
require_once "header.php";

require_once "db.php";
$select_query = "SELECT * FROM contacts";

$result = mysqli_query($my_database, $select_query);


//print_r($my_database) ;
?>
<div class="containter">
    <div class="row">
        <div class="col-12 ">
            <div class="card">
                <div class="card-Header text-white bg-primary ">
                    <h3 class="card-title">Messages(<span><?= mysqli_num_rows($result) ?></span>)</h3>
                    <p class="card-text"> Massages from database</p>

                </div>
                <div class="card">
                    <div class="card-body">

                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>ID</th>

                                    <th>Full Name</th>
                                    <th>Email Address</th>

                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $serial_number = 1;
                                foreach ($result as $data) {
                                ?>
                                    <tr>
                                        <td><?= $serial_number++ ?></td>
                                        <td><?= $data['id'] ?></td>


                                        <td><?= ucfirst(strtolower($data['First_name'])) . " " . ucfirst(strtolower($data['Last_name'])) ?></td>
                                        <td><?= strtolower($data['Email_address']) ?></td>

                                        <td>
                                            <a href="message_details.php? id=<?= $data['id'] ?>" class="btn btn-primary">Read</a>
                                            <a href="message_delete.php? id=<?= $data['id'] ?>" class=" btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php

    require_once "footer.php"
    ?>