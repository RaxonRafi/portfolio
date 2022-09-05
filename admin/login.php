<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>panda login</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">panda <span class="tx-info tx-normal">admin</span></div>
            <?php
            if (isset($_SESSION['register_success'])) :
            ?>
                <div class="alert alert-success">

                    <?=
                    $_SESSION['register_success'];
                    ?>
                </div>
            <?php endif; ?>
            <?php
            if (isset($_SESSION['login_error'])) :
            ?>
                <div class="alert alert-danger">

                    <?=
                    $_SESSION['login_error'];
                    ?>
                </div>
            <?php endif; ?>
            <form action="login-post.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email address" value="<?=($_SESSION['registered_email_address'] ? $_SESSION['registered_email_address'] : '') ?>" name="email">
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Login</button>
            </form>
            <div class="mg-t-60 tx-center">Not yet a member? <a href="register.php" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

</body>

</html>
<?php
session_unset();
?>