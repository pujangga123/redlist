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
    require_once PATH_CLASS."Karyawan.php";

    if($token=='load') {
        $id = $_POST['id'];
        $karyawan = new Karyawan($id);
        die(json_encode($karyawan));
    }

    if($token=="list") {
        //$key = $_POST['key'];

        $sql = "select id,nik,nama from karyawan limit 30";
        $rs = $db->getAll($sql);
        die(json_encode(array("data"=>$rs)));
    }

    die('no matching token');