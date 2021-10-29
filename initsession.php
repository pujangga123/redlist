<?php
    session_start();

    if(isset($_SESSION['kid'])) {
        $_kid = $_SESSION['kid'];    
    } else { 
        $_kid = '';
    }