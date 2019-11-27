<?php
include_once dirname(__FILE__) . '/../system/System.php';
$admin = new System();

if ($admin->checkLoginState() != true){
    header('location:'.$admin->domain().'/login?error=login-required');
    exit();
}
?>
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Settings - Worldmix</title>
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/icon/icon.png">
    <link rel="manifest" href="../img/icons/webmanifest.json">
    <link href="../vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="../img/icons/worldmix.png" width="50" alt="Ultra-Med Logo">
        <sup class="text-dark font-weight-bold">Worldmix</sup>
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="nav-icon icon-speedometer"></i> Home
                    </a>
                </li>
                <li class="nav-title">Listings</li>
                <li class="nav-item">
                    <a class="nav-link" href="categories/index.php">
                        <i class="nav-icon icon-briefcase"></i> Manage</a>
                </li>
                <li class="nav-title">Listing Categories</li>
                <li class="nav-item">
                    <a class="nav-link" href="categories/index.php">
                        <i class="nav-icon icon-briefcase"></i> Manage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categories/add.php">
                        <i class="nav-icon icon-pencil"></i> Add New</a>
                </li>
                <li class="nav-title">Account</li>
                <li class="nav-item">
                    <a class="nav-link" href="./settings">
                        <i class="nav-icon icon-settings"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">
                        <i class="nav-icon icon-power"></i> Logout</a>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Settings</li>
            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#">
                        <i class="icon-speech"></i>
                    </a>
                    <a class="btn" href="../">
                        <i class="icon-graph"></i>  Dashboard</a>
                    <a class="btn" href="./">
                        <i class="icon-settings"></i>  Settings</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn"></div>
        </div>
    </main>
</div>
<footer class="app-footer">
    <div>
        <span>&copy; 2018 Bascart Store.</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a target="_blank" href="https://coreui.io">CoreUI</a>
    </div>
</footer>
<!-- CoreUI and necessary plugins-->
<script src="../vendors/jquery/js/jquery.min.js"></script>
<script src="../vendors/popper.js/js/popper.min.js"></script>
<script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendors/pace-progress/js/pace.min.js"></script>
<script src="../vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="../vendors/@coreui/coreui/js/coreui.min.js"></script>
</body>
</html>
