<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 9/26/2019
 * Time: 5:07 PM
 */
include_once dirname(__FILE__) . '/system/System.php';
$admin = new System();
$admin->deleteCookie();
header('location:'.$admin->domain());
exit();