<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 26/05/2021
 * Time: 16:43
 */
require_once 'vendor/autoload.php';
use Casbin\Enforcer;

/*
 *
 */
header('Access-Control-Allow-Origin: *');

$e = new Enforcer('rbac_model.conf', 'rbac_policy.csv');

$sub = "user2"; // the user that wants to access a resource.
$obj = "/url1.php"; // the resource that is going to be accessed.
$act = "GET"; // the operation that the user performs on the resource.

if($e->enforce($sub, $obj, $act)){
    echo 'OK';
}else{
    header('HTTP/1.0 403 Forbidden');
    exit;
}

$e->addRoleForUser('user1', 'customer');
$e->addRoleForUser('user2', 'manager');

//customer
$e->addPermissionForUser('customer', '/url1.php', 'GET');
$e->addPermissionForUser('manager', '/url2.php', 'GET');
$e->savePolicy();