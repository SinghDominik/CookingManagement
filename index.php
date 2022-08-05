<?php
    require_once("./lib/system/core.class.php");

    spl_autoload_register(function ($model_class) {
        require_once PATH . "/lib/" . $model_class . ".class.php";
    });

    /*if(isset($_GET["page"]) && $_GET["page"] != ""){
        $core = new core($_GET["page"]);
    }else{
        $core = new core("index");
    }*/

    require_once("./settings.inc.php");

    $request_uri = $_SERVER['REQUEST_URI'];
    $page_folder = "/CookingManagement";

    $routes = array();

    $routes["\/suggestion"] = "suggestion";
    $routes["\/list\/create"] = "create_recipe";
    $routes["\/list\/recipe\/(\d+)"] = "recipe";
    $routes["\/list\/"] = "index";

    $routes["\/"] = "index";

    foreach($routes as $route => $action){
        $reg_ex = "/$route/";

        if(preg_match($reg_ex, $request_uri)){
            $core = new core($action);
            $core->process();
            $core->show();

            return;
        }
    }
?>