<?php 
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
    $_page = isset($_GET['page'])?$_GET['page']:"quickstart";
    $_page_path = PATH_MODS;

    // execute module
    include PATH_MODS.$_page.".php"; 

    // assign vars1
    $smarty->assign("_title", $_title);
    $smarty->assign("_header", $_header);
    $smarty->assign("_page", $_page);
    $smarty->assign("_page_path", $_page_path);
    $smarty->display(PATH_MODS.$_template);