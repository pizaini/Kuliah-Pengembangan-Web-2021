<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 28/05/2021
 * Time: 11:18
 */
$account = [
    'user1' => 'password1',
    'user2' => 'password2'
];


/**
 * test-casbin.php?user=<user>&password=<password>
 */
$user = $_GET['user'] ?? '';
$password = $_GET['password'] ?? '';

if(empty($user) || empty($password)){
    header('HTTP/1.0 401 Unauthorized');
    die('Username dan password tidak valid');
}
if(array_key_exists($user, $account)){
    $storedPassword = $account[$user];
    if($password != $storedPassword){
        header('HTTP/1.0 401 Unauthorized');
        die('Password tidak valid');
    }
    $loggedInUser = $user;
}else{
    header('HTTP/1.0 401 Unauthorized');
    die('Akun tidak terdaftar');
}