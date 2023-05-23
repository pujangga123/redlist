<?php
    if(isset($_POST['token'])) {
        $token = $_POST['token'];
    } else {
        die(0); // no token: ERROR
    }

    require_once "initsession.php";
    require_once "initcookies.php";
    require_once "config.php";
    require_once "initdb.php";  
    require_once "ext_libs.php";

    if(!isset($_POST['token'])) {
        die(1); //fail
    } else {
        $token = $_POST['token'];
    }

    if($token=='test') {
        die('ok');
    }

    

