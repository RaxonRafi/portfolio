<?php
session_start();

?>;
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Panda-Register</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Panda <span class="tx-info tx-normal">admin</span></div>
            <div class="tx-center mg-b-60">Register with your Personal informations</div>
            <form action="register-post.php" method="POST">

                <div class="form-group">
                    <input type="text" class="form-control <?= (isset($_SESSION['name_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your name" name="name" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name'] : '' ?>">
                    <?php
                    if (isset($_SESSION['name_error'])) : ?>
                        <small class="text text-danger"><?=$_SESSION['name_error']?></small>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control <?= (isset($_SESSION['email_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your Email Address" name="email" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '' ?>">
                    <?php
                    if (isset($_SESSION['email_error'])) : ?>
                        <small class=" text text-danger"><?= $_SESSION['email_error']?></small>
                    <?php endif; ?>
                    <?php
                    if (isset($_SESSION['same_email_error'])) : ?>
                        <small class=" text text-danger"><?=$_SESSION['same_email_error'] ?></small>
                    <?php endif; ?>
                   
                </div>


                <div class="form-group">
                    <input type="password" class="form-control  <?= (isset($_SESSION['password_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your password" name="password">
                    <?php
                    if (isset($_SESSION['password_error'])) : ?>
                        <small class="text text-danger"><?=$_SESSION['password_error']?></small>
                    <?php endif; ?>
                </div>


                <div class="form-group">
                    <input type="password" class="form-control <?= (isset($_SESSION['cpass_error'])) ? 'is-invalid' : '' ?>" placeholder="re-type password" name="cpassword">
                    <?php
                    if (isset($_SESSION['cpass_error'])) : ?>
                        <small class="text text-danger"><?=$_SESSION['cpass_error']?></small>
                    <?php endif; ?>
                    <?php
                    if (isset($_SESSION['match_error'])) : ?>
                        <small class="text text-danger"><?=$_SESSION['match_error']?></small>
                    <?php endif; ?>
                </div>
                <label for="">Gender:</label>
                <div class="form-group">
                    <label class="rdiobox">
                        <input name="gender" type="radio" value="male" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'male') ? 'checked' : '' ?>>
                        <span>Male</span>
                    </label>
                    <label class="rdiobox">
                        <input name="gender" type="radio" value="female" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'female') ? 'checked' : '' ?>>
                        <span>Female</span>
                    </label>
                    <label class="rdiobox">
                        <input name="gender" type="radio" value="other" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'other') ? 'checked' : '' ?>>
                        <span>Other</span>
                    </label>
                    <?php
                    if (isset($_SESSION['gender_error'])) : ?>
                        <small class="text text-danger"><?=$_SESSION['gender_error']?></small>
                    <?php endif ?>


                </div>

                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            </form>
            <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">login</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script>
        $(function() {
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });
        });
    </script>

</body>

</html>
<?php
session_unset();
?>