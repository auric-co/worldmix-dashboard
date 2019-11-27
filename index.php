<?php
include_once dirname(__FILE__) . '/system/System.php';
$admin = new System();

if ($admin->checkLoginState() != true){
    //header('location:'.$admin->domain().'/login?error=login-required');
   // exit();
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
    <title>Dashboard - Worldmix</title>
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/icon/icon.png">
    <link rel="manifest" href="img/icons/webmanifest.json">
    <link href="vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

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
        <img class="navbar-brand-full" src="img/icons/worldmix.png" width="50" alt="Worldmix Logo">
        <sup class="text-dark font-weight-bold">Worldmix</sup>
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
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
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="./">
                        <i class="icon-graph"></i>  Dashboard</a>
                    <a class="btn" href="./settings/">
                        <i class="icon-settings"></i>  Settings</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-primary">
                            <div class="card-body pb-0">
                                <div class="text-value">823</div>
                                <div>Sales </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-info">
                            <div class="card-body pb-0">
                                <div class="text-value">23</div>
                                <div>Orders this week</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-warning">
                            <div class="card-body pb-0">
                                <div class="text-value">9823</div>
                                <div>Total Customers </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-danger">
                            <div class="card-body pb-0">
                                <div class="text-value">823</div>
                                <div>Pending Shipments</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- /.col-->
                            <div class="container-fluid m-2">
                                <div class="animated fadeIn">
                                    <div class="card-columns cols-2">
                                        <div class="card">
                                            <div class="card-header">Monthly Sales Performance
                                                <div class="card-header-actions">
                                                    <a href="#" class="card-header-action " id="saveBarChart">
                                                        <span class="text-muted"><i class="fa fa-download"></i> Download</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="chart-wrapper">
                                                    <canvas id="myBarChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">Top Cities
                                                <div class="card-header-actions">
                                                    <a class="card-header-action" id="saveCitiesChart" href="#" target="_blank">
                                                        <span class="text-muted"><i class="fa fa-download"></i> Download</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="chart-wrapper">
                                                    <canvas id="canvas-3"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">Pie Chart
                                                <div class="card-header-actions">
                                                    <a class="card-header-action" id="savePieChart" href="#" target="_blank">
                                                        <span class="text-muted"><i class="fa fa-download"></i> Download</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="chart-wrapper">
                                                    <canvas id="canvas-5"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.add body here-->
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                <div class="text-muted">Visits</div>
                                <strong>29.703 Users (40%)</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                <div class="text-muted">Unique</div>
                                <strong>24.093 Users (20%)</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                <div class="text-muted">Pageviews</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                <div class="text-muted">New Users</div>
                                <strong>22.123 Users (80%)</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                <div class="text-muted">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Pending Orders</div>
                            <div class="card-body">

                                <br>
                                <table class="table table-responsive-sm table-hover table-outline mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">
                                            <i class="icon-people"></i>
                                        </th>
                                        <th>Customer</th>
                                        <th class="text-center">Country</th>
                                        <th>Value</th>
                                        <th class="text-center">Payment Method</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar">
                                                <img class="img-avatar" src="img/avatars/1.jpg" alt="admin@bootstrapmaster.com">
                                                <span class="avatar-status badge-success"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Yiorgos Avraamu</div>
                                            <div class="small text-muted">
                                                <span>New</span> | Registered: Jan 1, 2015</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="flag-icon flag-icon-us h4 mb-0" id="us" title="us"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>50%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <strong>10 sec ago</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar">
                                                <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                                                <span class="avatar-status badge-danger"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Avram Tarasios</div>
                                            <div class="small text-muted">
                                                <span>Recurring</span> | Registered: Jan 1, 2015</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>10%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-cc-visa" style="font-size:24px"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <strong>5 minutes ago</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar">
                                                <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                                                <span class="avatar-status badge-warning"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Quintin Ed</div>
                                            <div class="small text-muted">
                                                <span>New</span> | Registered: Jan 1, 2015</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>74%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <strong>1 hour ago</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar">
                                                <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                                                <span class="avatar-status badge-secondary"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Enéas Kwadwo</div>
                                            <div class="small text-muted">
                                                <span>New</span> | Registered: Jan 1, 2015</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>98%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-paypal" style="font-size:24px"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <strong>Last month</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar">
                                                <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                                                <span class="avatar-status badge-success"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Agapetus Tadeáš</div>
                                            <div class="small text-muted">
                                                <span>New</span> | Registered: Jan 1, 2015</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>22%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-google-wallet" style="font-size:24px"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <strong>Last week</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar">
                                                <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                                <span class="avatar-status badge-danger"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Friderik Dávid</div>
                                            <div class="small text-muted">
                                                <span>New</span> | Registered: Jan 1, 2015</div>
                                        </td>
                                        <td class="text-center">
                                            <i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>43%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-cc-amex" style="font-size:24px"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <strong>Yesterday</strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>
    </main>
    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                    <i class="icon-list"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                    <i class="icon-speech"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                    <i class="icon-settings"></i>
                </a>
            </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-accent">
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
                    <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Meeting with
                            <strong>Lucas</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  1 - 3pm</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i>  Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-info">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Skype with
                            <strong>Megan</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  4 - 5pm</small>
                        <small class="text-muted">
                            <i class="icon-social-skype"></i>  On-line</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
                    <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                        <div>New UI Project -
                            <strong>deadline</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  10 - 11pm</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>  creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                        <div>
                            <strong>#10 Startups.Garden</strong> Meetup</div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  1 - 3pm</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i>  Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                        <div>
                            <strong>Team meeting</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  4 - 6pm</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>  creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <small>
                            <b>Option 1</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 2</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 3</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 4</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4">
                    <small>
                        <b>CPU Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>Memory Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 1 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 2 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </aside>
</div>
<footer class="app-footer">
    <div>
        &copy; 2019 Bascart Store
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
    </div>
</footer>
<!-- CoreUI and necessary plugins-->
<script src="vendors/jquery/js/jquery.min.js"></script>
<script src="vendors/popper.js/js/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/pace-progress/js/pace.min.js"></script>
<script src="vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="vendors/@coreui/coreui/js/coreui.min.js"></script>
<!-- Plugins and scripts required by this view-->
<script src="./js/src/js-xlsx-master/dist/xlsx.full.min.js"></script>
<script src="./js/src/FileSaver.js-master/dist/FileSaver.min.js"></script>
<script src="./js/src/canvas-toBlob.js-master/canvas-toBlob.js"></script>
<script src="./vendors/chart.js/js/Chart.min.js"></script>
<script src="./vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
<script src="./js/main.js"></script>
<script src="./js/charts.js"></script>
</body>
</html>
