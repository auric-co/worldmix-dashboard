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
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Categories - Worldmix</title>
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/icon/icon.png">
    <link rel="manifest" href="../img/icons/webmanifest.json">
    <link href="../vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../js/src/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../js/src/DataTables-1.10.18/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
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
        <img class="navbar-brand-full" src="../img/icons/worldmix.png" width="50" alt="Worldmix Logo">
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
            <li class="breadcrumb-item">
                <a href="../">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Categories</li>
            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#">
                        <i class="icon-speech"></i>
                    </a>
                    <a class="btn" href="../">
                        <i class="icon-graph"></i>  Dashboard</a>
                    <a class="btn" href="./settings">
                        <i class="icon-settings"></i>  Settings</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header"> Categories</div>
                    <div class="card-body">

                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
<footer class="app-footer">
    <div>
        <span>&copy; 2018 Bascart</span>
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
<script type="text/javascript" charset="utf8" src="../js/src/DataTables-1.10.18/js/jquery.dataTables.js"></script>
<script src="../js/src/DataTables-1.10.18/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table-customers').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    } );
</script>
</body>
</html>
