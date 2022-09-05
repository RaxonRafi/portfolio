<?php

$testimonial = true;
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
            <h6 class="card-body-title">Add testimonial</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="testimonial-post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">post: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="post">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="description">
                            </div>
                        </div><!-- col-4 -->
                        
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Submit Form</button>
                    </div>

            </form>
            <hr>
            <h6 class="card-body-title">list testimonials</h6>
            <table class="table">
                <thead>
                    <tr>

                        <th>name</th>
                        <th>description</th>
                        <th>post</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach (panda_all('testimonials') as $single_testimonial) :
                    ?>
                        <tr>
                            <td><?= $single_testimonial['name'] ?></td>
                            <td><?= $single_testimonial['post'] ?></td>
                            <td><?= $single_testimonial['description'] ?></td>
                            <td>
                                <a href="testimonial-delete.php?id=<?= $single_testimonial['id'] ?>" class=" text-white btn btn-sm btn-danger">
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