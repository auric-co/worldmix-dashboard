<?php
    include_once dirname(__FILE__) . './../system/System.php';
    $admin = new System();
    global $cat;
    if ($admin->checkLoginState() !== true){
        header('location:'.$admin->domain().'/?error=login-required');
        exit();
    }
    if (isset($_GET['item'])) {
        $id = $_GET['item'];
        switch ($id) {
            case "1":
                header("location: ".$admin->domain() . "/dashboard/categories/services?cat=".$id);
                exit();
                break;
            case "2":
                header("location: ".$admin->domain() . "/dashboard/categories/accommodation?cat=".$id);
                exit();
                break;
            case "3":
                header("location: ".$admin->domain() . "/dashboard/categories/jobs?cat=".$id);
                exit();
                break;
            case "4":
                header("location: ".$admin->domain() . "/dashboard/categories/vehicle?cat=".$id);
                exit();
                break;
            default:
                header("location: ".$admin->domain() . "/dashboard/");
                exit();
                break;
        }
    }
    else
        header("location: ".$admin->domain()."/dashboard");
        exit();

?>

<