<?php 
    require_once "initsession.php";
    require_once "initcookies.php";
    require_once "config.php";
    require_once __DIR__ . '/vendor/autoload.php';
    require_once "initdb.php";  
    require_once "initsmarty.php";
    require_once "ext_libs.php";
    
    if($_kid=='') {
        // check cookie
        if(isset($_COOKIE['kid'])) { // if exists, load to session
            $_SESSION['kid'] =$_COOKIE['kid'];
            $_kid = $_SESSION['kid'];

            $row = sqlRow("*","karyawan","id",$_kid);
            if($row) { 
                //
            } else {
                $_kid = "";
            }

            //if expired or not valid, goto login
            header('location:login.html');
        } else { // if cookie empty, goto to login
            header('location:login.html');
        }
        
    }

    //POST to _var
    foreach($_POST as $key=>$val) {
        $$key = $val;
    }

    $_jsvars = array();

    // DEFAULTS
    // semua global val gunakan _ sebagai prefix
    $_template = "index .html"; // default template
    $_header = PATH_MODS."header.html";
    $_title = "REDLIST"; 

    //read module
    $_module = isset($_GET['m'])?$_GET['m']:"dashboard";
    $_module_template = PATH_MODS.$_module.".html";

    // execute module
    include PATH_MODS.$_module.".php";

    // assign vars
    $smarty->assign("_title", $_title);
    $smarty->assign("_jsvars", $_jsvars);
    $smarty->assign("_header", $_header);
    $smarty->assign("_module", $_module);
    $smarty->assign("_module_template", $_module_template);
    $smarty->assign("_kid", $_kid);
    $smarty->display(PATH_MODS."index.html");