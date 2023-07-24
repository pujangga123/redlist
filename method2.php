<?php
require_once("init.php");

// program goes here
$smarty->assign("a", 123);

$smarty->display("method2.tpl");