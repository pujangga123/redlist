<?php 
    require_once "initsession.php";
    require_once "initcookies.php";
    require_once "config.php";
    require_once __DIR__ . '/vendor/autoload.php';
    require_once "initdb.php";  
    require_once "initsmarty.php";
    require_once "ext_libs.php";

    if($_cid=='') {
        // check cookie
        if(isset($_COOKIE['cid'])) { // if exists, load to session
            $_SESSION['cid'] =$_COOKIE['cid'];
            $_cid = $_SESSION['cid'];

            $row = sqlRow("*","karyawan","uid",$_cid);
            if($row) { 
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['role'] = $row['role']; // user role
                $_SESSION['dept'] = $row['dept'];            
            } else {
                $_cid = "";
            }

            //if expired or not valid, goto login
            
        } else { // if cookie empty, goto to login

        }
        
    }

    //POST to _var
    foreach($_POST as $key=>$val) {
        $$key = $val;
    }

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
    $smarty->assign("_header", $_header);
    $smarty->assign("_module", $_module);
    $smarty->assign("_module_template", $_module_template);
    $smarty->assign("_cid", $_cid);
    $smarty->display(PATH_MODS."index.html");