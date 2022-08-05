<?php
    class suggestion_controller{
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
            
            $recipes = $this->db_object->query("SELECT * FROM recipes ORDER BY RAND() LIMIT 4");

            $this->vars["recipes"] = $recipes->fetchAll();
            return $this->vars;
        }
    }