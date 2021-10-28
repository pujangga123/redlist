<?php
    session_start();

    if(isset($_SESSION['cid'])) {
        $_cid = $_SESSION['cid'];    
        $_uid = $_SESSION['uid']?:'';
    } else { 
        $_cid = '';
        $_uid = "";
    }