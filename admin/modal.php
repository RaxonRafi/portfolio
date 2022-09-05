<?php
$modal = true;
require_once "inc/header.php";
require_once "../db.php";
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Modal</a>

    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Modal</h5>
            <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Modal</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="news-post.php" method="POST" enctype="multipart/form-data">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Modal Headline: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="modal_headline">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">modal Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="modal_photo">
                                <small>size:640x520</small>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">project type: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="project_type">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">client: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="client">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">COMPLETION: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="completion">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">AUTHORS: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="authors">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">BUDGET: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="budget">
                            </div>
                        </div><!-- col-4 -->
                       
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Submit Form</button>
                    </div>

            </form>
            <hr>
            <h6 class="card-body-title">list Modal</h6>
            <table class="table">
                <thead>
                    <tr>

                        <th>Modal headline</th>
                        <th>modal photo</th>
                       <th>project type</th>
                       <th>Client</th>
                       <th>Authors</th>
                       <th>Budget</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach (panda_all('modals') as $single_modal) :
                    ?>
                        <tr>
                            <td><?= $single_modal['modal_headline'] ?></td>
                            <td> <?= $single_modal['new_photo_name'] ?></td>
                            <td> <?= $single_modal['project_type'] ?></td>
                            <td> <?= $single_modal['client'] ?></td>
                            <td> <?= $single_modal['authors'] ?></td>
                            <td> <?= $single_modal['budget'] ?></td>

                            <td>
                                <a href="modal-delete.php?id=<?= $single_modal['id'] ?>" class=" text-white btn btn-sm btn-danger">
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