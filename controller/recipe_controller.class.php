<?php
    class recipe_controller{
        private $vars = array();
        private $arguments = array();

        private $db_object = null;
    
        //--------
        //Settings
        //-------
        private $need_loggedin = false;
        private $needed_rank = 0;
        //-------

        public function __construct($db_object, $arguments){
            $this->db_object = $db_object;
            $this->arguments = $arguments;
        }

        public function IsLoginNeeded(){
            return $this->need_loggedin;
        }

        public function IsRankNeeded(){
            return $this->needed_rank;
        }

        public function process(){
            if(!isset($_GET["mode"]) || $_GET["mode"] == "all"){
                $recipes = $this->db_object->query("SELECT * FROM recipes WHERE id = ?", array($this->arguments[0]));

                $this->vars["recipes"] = $recipes->fetchAll();
            }
            
            return $this->vars;
        }
    }