<?php
include_once "dashboard/system/Database.php";
include_once "dashboard/system/System.php";

$login = new System();

if ($login->checkLoginState()){
    $login->deleteCookie();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>WorldMix Admin</title>
    <meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework."/>
    <meta name="keywords"
          content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application"/>
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="dist/img/icons/icon/icon.png">
    <link rel="icon" href="dist/img/icons/icon/icon.png" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet"
          type="text/css"/>

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/bootstrapGrowlAlerts/jquery.bootstrap-growl.js"></script>
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<?php

if (isset($_POST['login'])){
    $email = $_POST['username'];
    $password = $_POST['password'];

    $login->setEmail($email);
    $login->setPassword($password);
    $login->login();
}

?>
<div class="wrapper pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="index.php">
                <img class="brand-img mr-10" style="height: 200px" src="dist/img/logo.png" alt="brand"/>
            </a>
        </div>
        <div class="form-group mb-0 pull-right">

        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">WorldMix Admin</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                </div>
                                <div class="form-wrap">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label class="control-label mb-10"
                                                   for="exampleInputEmail_2">Username</label>
                                            <input type="text" name="username" class="form-control" required=""
                                                   id="exampleInputEmail_2" placeholder="Enter your username">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                            <a class="capitalize-font txt-primary block mb-10 pull-right font-12"
                                               href="./forgot-password">forgot password ?</a>
                                            <div class="clearfix"></div>
                                            <input type="password" name="password" class="form-control" required=""
                                                   id="exampleInputpwd_2" placeholder="Enter password">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" name="login"
                                                    class="btn btn-info btn-success btn-rounded">sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->


<!-- Bootstrap Core JavaScript -->
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>
<script src="dashboard/js/src/bootbox/bootbox.all.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
</body>
</html>

