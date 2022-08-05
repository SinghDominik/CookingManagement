<?php
    class core{
        private $page = null;
        
        private $vars = array();
        private $arguments = array();

        private $db_object = null;
        private $error_handler_object = null;

        public function __construct($page, $arguments){
            require_once "./settings.inc.php";
            require_once PATH . "/lib/system/db.class.php";
            require_once PATH . "/lib/system/template.class.php";

            $this->db_object = new db();
            $this->page = $page;

            array_shift($arguments);
            $this->arguments = $arguments;

            return true;
        }

        public function process(){
            //--------------------------------------
            //Init User Class / Processing of Page
            //--------------------------------------
            $controller_path = PATH . "/controller/" . $this->page . "_controller.class.php";
            $tpl_path = PATH . "templates/" . $this->page . ".tpl";
            
            if(!file_exists($tpl_path)){
                $this->page = "error404";
                $this->process();
                die();
            }
            
            if(file_exists($controller_path)){
                require_once $controller_path;
                
                $page_class_name = $this->page . "_controller";
                
                $page_class = new $page_class_name($this->db_object, $this->arguments);
                
                if($page_class->IsLoginNeeded() && !isset($_SESSION["user_id"])){
                    $this->page = "login";
                    $this->process();
                    
                    return false;
                }
                $this->vars = $page_class->process();
            }
            
            //--------------------------------------
            //Init Template Engine
            //--------------------------------------
            
            $template_engine = new template($this->page, $this->db_object, $this->vars);
            $template_engine->render();
            return true;
        }

        public function show(){
            require_once(PATH . "/compiled/" . $this->page . ".php");
        }
    }