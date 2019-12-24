<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/27/2019
 * Time: 2:59 AM
 *
 */
    include_once dirname(__FILE__) . './../system/System.php';
    $admin = new System();
    global $cat;
    if ($admin->checkLoginState() !== true){
        header('location:'.$admin->domain().'/?error=login-required');
        exit();
    }

