<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 28/05/2021
 * Time: 11:15
 */
/**
 * http://test.localhost/test-casbin.php?url=URL
 */
header('Access-Control-Allow-Origin: *');
$loggedInUser = 'nouser';
include 'authentication.php';
include 'vendor/autoload.php';
$url = $_GET['url'] ?? 'url1';
$file = $url.'.php';
/*
 * User, url, method
 */
$user = $loggedInUser;
$urlToCheck = '/'.$file;
$requestMethod = $_SERVER['REQUEST_METHOD'];

/**
 * Check autorisasi
 */
$enforcer = new \Casbin\Enforcer('rbac_model.conf', 'rbac_data.csv');

if ($enforcer->enforce($user, $urlToCheck, $requestMethod)) {
    include $file;
} else {
    header('HTTP/1.0 403 Unauthorized');
    $message = "User = {$user}, url = {$urlToCheck}, request method = {$requestMethod}";
    exit('403: ' . $message);
}