<?php
    require_once("../database/Connection.class.php");
    require_once("../model/Member.class.php");
    
    class MembersController {
        private $connection;
        
        public function __construct() {
            $this->connection = Connection::getInstance();
        }
    
        public function registerNewMember($member) {
            $connection = Connection::getInstance();
            $query = "INSERT INTO membro(nome, senha, sexo) VALUES ('{$member->getNome()}', '{$member->getSenha()}', '{$member->getSexo()}')";
            $sql = $connection->query($query);
        }
    }
?>