<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 27/05/2021
 * Time: 9:46
 */
header('Access-Control-Allow-Origin: *');

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Please provide username dan password';
    exit();
}else{
    echo "Basic OK. Username = {$_SERVER['PHP_AUTH_USER']} dan password = {$_SERVER['PHP_AUTH_PW']}";
}