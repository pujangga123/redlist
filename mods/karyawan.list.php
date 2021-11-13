<?php
    $_title = "Karyawan";

    $sql = "select * from karyawan";

    $data = $db->GetAll($sql);
    $smarty->assign("data", $data);