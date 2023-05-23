<?php 
    require_once "initsession.php";
    require_once "initcookies.php";
    require_once "config.php";
    require_once "initdb.php";  
    require_once "initsmarty.php";
    require_once "ext_libs.php";

    //POST to _var
    foreach($_POST as $key=>$val) {
        $$key = $val;
    }

    $_jsvars = array();

    // DEFAULTS
    // semua global val gunakan _ sebagai prefix
    $_template = "index.tpl"; // default template
    $_header = PATH_MODS."header.tpl";
    $_title = "REDLIST"; 

    //read module
    $_module = isset($_GET['m'])?$_GET['m']:"home";
    $_module_path = PATH_MODS;

    // execute module
    include PATH_MODS.$_module.".php"; 

    // assign vars1
    $smarty->assign("_title", $_title);
    $smarty->assign("_header", $_header);
    $smarty->assign("_module", $_module);
    $smarty->assign("_module_path", $_module_path);
    $smarty->display(PATH_MODS.$_template);