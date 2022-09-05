<?php

$skill = true;
require_once "inc/header.php";
require_once "../db.php";
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">skill</a>

    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>skill</h5>
            <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add skill</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="skill-post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Skill name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="skill_name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">percentage: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="range" name="percentage" step="1" min="1" max="100">
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Submit Form</button>
                    </div>

            </form>
            <hr>
            <h6 class="card-body-title">list Skills</h6>
            <table class="table">
                <thead>
                    <tr>

                        <th>Skill name</th>
                        <th>percentage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach (panda_all('skills') as $single_skill) :
                    ?>
                        <tr>
                            <td><?= $single_skill['skill_name'] ?></td>
                            <td><?= $single_skill['percentage'] ?></td>
                            <td>
                                <a href="skill-delete.php?id=<?=$single_skill['id']?>" class=" text-white btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i> Delete
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