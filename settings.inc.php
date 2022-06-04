<?php
    //general
    define("PATH", realpath($_SERVER["DOCUMENT_ROOT"]) . "/CookingManagement/");
    define("USE_LANGUAGE", 0);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

    //database
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "cooking_management");
    define("DB_CHARSET", "UTF8");
?>