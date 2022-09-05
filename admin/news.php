<?php
$news = true;
require_once "inc/header.php";
require_once "../db.php";
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">News</a>

    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>News</h5>
            <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add News</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="news-post.php" method="POST" enctype="multipart/form-data">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">News Headline: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="news_headline">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">News Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="news_photo">
                                <small>size:640x520</small>
                            </div>
                        </div><!-- col-4 -->
                      
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">News Details: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="news_details" rows="5"></textarea>
                            </div>
                        </div><!-- col-8 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Submit Form</button>
                    </div>

            </form>
            <hr>
            <h6 class="card-body-title">list News</h6>
            <table class="table">
                <thead>
                    <tr>

                        <th>News headline</th>
                        <th>News details</th>
                        <th>News photo</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach (panda_all('news') as $single_news) :
                    ?>
                        <tr>
                          <td><?= $single_news['news_headline'] ?></td>
                          <td> <?= $single_news['news_details'] ?></td>
                          <td> <?= $single_news['news_photo_name'] ?></td>

                            <td>
                                <a href="news-delete.php?id=<?= $single_news['id'] ?>" class=" text-white btn btn-sm btn-danger">
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