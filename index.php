<?php
    require_once("./lib/system/core.class.php");

    spl_autoload_register(function ($model_class) {
        require_once PATH . "/lib/" . $model_class . ".class.php";
    });

    if(isset($_GET["page"]) && $_GET["page"] != ""){
        $core = new core($_GET["page"]);
    }else{
        $core = new core("index");
    }

   
    $core->process();
    $core->show();
?>