<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 15/04/2021
 * Time: 14:09
 */
$servername = "localhost";
$username = "pizaini";
$password = "pizaini";

try {
    $conn = new PDO("mysql:host=$servername;dbname=kuliah_pabw", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}