<?php 
session_start();
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    //panggil fungsi
    switch (@$_GET['mod']){
        case 'driver':
            include_once 'controller/driver.php';
            break;
        default:
            include_once 'controller/driver.php';
    }
}
else{
    //panggil cont login
    include_once 'controller/login.php';
}
?>