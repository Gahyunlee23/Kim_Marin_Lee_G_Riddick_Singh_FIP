<?php 
    ini_set('display_errors', 1);

    define('ABSPATH', __DIR__);
    define('ADMIN_PATH', ABSPATH.'/admin');
    define('ADMIN_SCRIPT_PATH', ADMIN_PATH.'/script'); 
    
    require_once ABSPATH.'/config/database.php';
    require_once ADMIN_SCRIPT_PATH.'/login.php';
    require_once ADMIN_SCRIPT_PATH.'/function.php';
