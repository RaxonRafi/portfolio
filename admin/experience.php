<?php
$experince = true;
require_once "inc/header.php";
require_once "../db.php";
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Experience</a>

    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Experience</h5>
            <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Experience</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="experience-post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Company name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="company_name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="duration" placeholder="Eg: 2012-2015">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="designation">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="description" rows="5"></textarea>
                            </div>
                        </div><!-- col-8 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Submit Form</button>
                    </div>

            </form>
            <hr>
            <h6 class="card-body-title">list Experience</h6>
            <table class="table">
                <thead>
                    <tr>

                        <th>Company name</th>
                        <th>Duration</th>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach (panda_all('experiences') as $single_experience) :
                    ?>
                        <tr>
                            <td><?= $single_experience['company_name'] ?></td>
                            <td><?= $single_experience['duration']?></td>
                            <td><?= $single_experience['designation'] ?></td>
                            <td><?= $single_experience['description'] ?></td>

                            <td>
                                <a href="experience-delete.php?id=<?= $single_experience['id']?>" class=" text-white btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i> delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <!-- form-layout-footer -->
        </div><!-- form-layout -->
    </div><!-- card -->


</div><!-- sl-pagebody -->

<?php

require_once "inc/footer.php"

?>