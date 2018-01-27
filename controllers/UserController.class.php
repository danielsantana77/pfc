<?php
    require_once("../database/Connection.class.php");
    require_once("../model/User.class.php");
    
    
    class UserController {
        private $connection;
        
        public function __construct() {
            $this->connection = Connection::getInstance();
        }
    }
?>