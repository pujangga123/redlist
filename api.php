<?php
    if(isset($_POST['token'])) {
        $token = $_POST['token'];
    } else {
        die(0); // no token: ERROR
    }

    require_once "initsession.php";
    require_once "initcookies.php";
    require_once "config.php";
    require_once __DIR__ . '/vendor/autoload.php';
    require_once "initdb.php";  
    require_once "ext_libs.php";

    if($token=='login') {
        $username = $_POST['username']??'';
        $userpass = $_POST['userpass']??'';

        $username = strtolower(trim($username));

        if($username==''||$userpass=='') {
            die(1); // fail
        }

        $sql = "select * from karyawan where username='$username' and userpass=md5('$userpass')";
        if($row = $db->GetRow($sql)) {
            die('ok'); //user accepted
        } else {
            die('invalid'); //user not found or password not match
        }
    }