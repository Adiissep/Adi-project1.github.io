<?php
    define('NAMA_HOST', 'localhost');
    define('NAMA_DB', 'db_arsip');
    define('USER_DB', 'root');
    define('USER_PASS', '');
    
    $MyCon =new mysqli(NAMA_HOST,USER_DB,USER_PASS,NAMA_DB);
    
    if ($MyCon->connect_errno)
    {
      die("ERROR : - > ".$MyCon->connect_error);
        exit();
    } else {
        
    }
    
?>