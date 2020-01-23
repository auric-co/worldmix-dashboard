<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/27/2019
 * Time: 2:59 AM
 * 2
 */

include_once dirname(__FILE__) . './../../system/System.php';
$admin = new System();

if ($admin->checkLoginState() !== true){
    header('location:'.$admin->domain().'/?error=login-required');
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
    <base href="./../../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Add Accommodation Category - Worldmix</title>
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/icon/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/icon/icon.png">
    <link rel="manifest" href="../img/icons/webmanifest.json">
    <link href="vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/util.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $admin->domain()?>/dist/font-awesome/css/font-awesome.min.css">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script src="../../dist/js/bootstrapGrowlAlerts/jquery.bootstrap-growl.js"></script>
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
    <a class="navbar-brand" href="<?php echo $admin->domain()."/dashboard"; ?>">
        <img class="navbar-brand-full" src="img/icons/worldmix.png" width="50" alt="Worldmix Logo">
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
                    <a class="nav-link" href="<?php echo $admin->domain()."/dashboard"; ?>">
                        <i class="nav-icon icon-speedometer"></i> Home
                    </a>
                </li>
                <li class="nav-title">Listings</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $admin->domain()."/dashboard/"; ?>categories/">
                        <i class="nav-icon icon-briefcase"></i> Manage</a>
                </li>
                <li class="nav-title">Listing Categories</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $admin->domain()."/dashboard/"; ?>categories/index.php">
                        <i class="nav-icon icon-briefcase"></i> Manage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $admin->domain()."/dashboard/"; ?>categories/add.php">
                        <i class="nav-icon icon-pencil"></i> Add New</a>
                </li>
                <li class="nav-title">Account</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $admin->domain()."/dashboard"; ?>/settings">
                        <i class="nav-icon icon-settings"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $admin->domain()."/dashboard"; ?>/logout.php">
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
                <a href="<?php echo $admin->domain()."/dashboard"; ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Categories</li>
            <li class="breadcrumb-item active"><a href="<?php echo $admin->domain()?>/dashboard/categories/accommodation">Accommodation</a> </li>
            <li class="breadcrumb-item active">Add Sub Categories </li>
            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#">
                        <i class="icon-speech"></i>
                    </a>
                    <a class="btn" href="<?php echo $admin->domain()."/dashboard"; ?>">
                        <i class="icon-graph"></i>  Dashboard</a>
                    <a class="btn" href="<?php echo $admin->domain()."/dashboard"; ?>/settings">
                        <i class="icon-settings"></i>  Settings</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="card">
                    <?PHP

                    if(isset($_POST['submit'])) {

                        $name = $_POST['name'];
                        $description = $_POST['desc'];
                        $request = json_encode(array('name' => $name, "description" =>$description));
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => $admin->apiURL() . "/api/admin/add/subcategory/higher/2",
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 30,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "PUT",
                            CURLOPT_POSTFIELDS => $request,
                            CURLOPT_HTTPHEADER => array(
                                "content-type: application/json",
                            ),
                        ));

                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        $data = json_decode($response, true);
                        if ($err) {
                            echo "<script>alert('".$err."')</script>";
                        } else {
                            if ($data['success'] == true) {
                                echo "<script>alert('Sub category Saved')</script>";
                            } else {

                                $message = "Problem in saving subcategory";
                                $result = $data['error'] ? $message.". Error: ".$data['error'] : $message.". Error: ".$data['error']['message'];
                                echo "<script>alert('".$data."')</script>";
                            }
                        }
                    }

                    if (isset($_POST["import"])) {

                        $fileName = $_FILES["file"]["tmp_name"];

                        $file = fopen($fileName, "r");
                        $data = array();
                        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                            $request = json_encode(array('name' => $column['0'], "description" => $column['1']));
                            if (strtolower($column['0']) == "name" && strtolower($column['1']) == "description"){
                                //skip
                                continue;
                            }else {
                                array_push($data, $request);
                            }

                        }

                        $request = json_encode($data);

                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => $admin->apiURL() . "/api/admin/add/upload/2/higher",
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 30,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "PUT",
                            CURLOPT_POSTFIELDS => $request,
                            CURLOPT_HTTPHEADER => array(
                                "content-type: application/json",
                            ),
                        ));

                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        $data = json_decode($response, true);
                        if ($err) {
                            echo "<script>alert('" . $err . "')</script>";
                        } else {
                            if ($data['success'] == true) {

                                $message = "Accommodation Subcategories saved";
                                echo "<script>alert('" . $message . "')</script>";
                            } else {
                                $message = "Problem in Importing CSV Data";
                                $result = $data['error'] ? $message.". Error: ".$data['error'] : $message.". Error: ".$data['error']['message'];
                                echo "<script>alert('".$result."')</script>";
                            }
                        }
                    }



                    ?>
                    <div class="card-header"> Add Accommodation Sub Categories</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>?item=<?php echo $_GET['item']; ?>" method="post" id="addSubCat1">

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" required id="name" type="text" name="name" placeholder="Sub Category Display Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="surname">Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" required id="desc" type="text" name="desc" rows="3" placeholder="Sub Category Category"></textarea>
                                </div>
                            </div>
                        </form>
                        <button class="btn btn-sm btn-primary" type="submit" name="submit" form="addSubCat1"><i class="fa fa-dot-circle-o"></i> Submit</button>
                        <button class="btn btn-sm btn-danger" type="reset" form="addSubCat1"><i class="fa fa-ban"></i> Reset</button>
                    </div>
                    <div class="card-footer">
                        <form class="form-horizontal" action="" method="post" id="uploadCSV" name="uploadCSV" enctype="multipart/form-data">
                            <div class="input-row">
                                <label class="col-md-4 control-label">Choose CSV File</label>
                                <input type="file"  name="file" id="file" accept=".csv">
                                <button type="submit" id="submit" name="import" class="btn btn-warning btn-submit">Import</button>
                                <br />

                            </div>
                            <div id="labelError"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
<footer class="app-footer">
    <div>
        <span>&copy; <?php echo date('Y')?> Worldmix</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a target="_blank" href="https://coreui.io">CoreUI</a>
    </div>
</footer>
<!-- CoreUI and necessary plugins-->
<script src="vendors/jquery/js/jquery.min.js"></script>
<script src="vendors/popper.js/js/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/pace-progress/js/pace.min.js"></script>
<script src="vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="vendors/@coreui/coreui/js/coreui.min.js"></script>
<script type="text/javascript">
    $(document).ready(
        function() {
            $("#uploadCSV").on(
                "submit",
                function() {

                    $("#labelError").attr("class", "");
                    $("#labelError").html("");
                    var fileType = ".csv";
                    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("+ fileType + ")$");
                    if (!regex.test($("#file").val().toLowerCase())) {
                        $("#labelError").addClass("error");
                        $("#labelError").addClass("display-block");
                        $("#labelError").html("Invalid File. Upload : <b>" + fileType+ "</b> Files.");
                        return false;
                    }
                    return true;
                });
        });
</script>
</body>
</html>

