<?php
    class index_controller{
        private $vars = array();

        private $db_object = null;
    
        //--------
        //Settings
        //-------
        private $need_loggedin = false;
        private $needed_rank = 0;
        //-------

        public function __construct($db_object){
            $this->db_object = $db_object;
        }

        public function IsLoginNeeded(){
            return $this->need_loggedin;
        }

        public function IsRankNeeded(){
            return $this->needed_rank;
        }

        public function process(){
            if(!isset($_GET["mode"]) || $_GET["mode"] == "all"){
                $recipes = $this->db_object->query("SELECT * FROM recipes ORDER BY id DESC");

                $this->vars["recipes"] = $recipes->fetchAll();
            }
            
            
            return $this->vars;
        }
    }