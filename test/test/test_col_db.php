<?php 
    require_once './config.inc.php';
    require_once 'include/db_class.php';


    $db = new Db();

    // $db->query("SELECT orderName FROM usersorders");
    // $db->query("SELECT abc FROM usersorders");
    // $db->query("SELECT orderName FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='editus' AND TABLE_NAME='usersorders'");
    $db->query("SHOW COLUMNS FROM usersorders");
    
    
    $res = $db->fetch_array();

    echo json_encode($res);


?>