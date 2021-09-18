<?php
    // https://adodb.org/dokuwiki/doku.php
    $driver = 'mysqli';
 
    $db = newAdoConnection($driver);
    $db->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    //$db->debug = true;