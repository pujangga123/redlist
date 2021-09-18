<?php 
    require_once "initsession.php";
    require_once "config.php";
    require __DIR__ . '/vendor/autoload.php';
    require "initdb.php";  
    require "initsmarty.php";

    //POST to _var
    foreach($_POST as $key=>$val) {
        $$key = $val;
    }

    // DEFAULTS
    // semua global val gunakan _ sebagai prefix
    $_template = "index.html"; // default template
    $_header = PATH_MODS."header.html";
    $_title = "REDLIST"; 

    //read module
    $_module = isset($_GET['m'])?$_GET['m']:"home";
    $_module_template = PATH_MODS.$_module.".html";

    // execute module
    include PATH_MODS.$_module.".php";

    // assign vars
    $smarty->assign("_title", $_title);
    $smarty->assign("_header", $_header);
    $smarty->assign("_module", $_module);
    $smarty->assign("_module_template", $_module_template);
    $smarty->display(PATH_MODS."index.html");