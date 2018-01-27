<?php
    require_once("../database/Connection.class.php");
    require_once("../model/Member.class.php");
    
    
    class MembersController {
        private $connection;
        
        public function __construct() {
            $this->connection = Connection::getInstance();
        }
        
        //Registrar membro
        public function registerNewMember($member) {
            $connection = Connection::getInstance();
            $query = "INSERT INTO membro(nome, pfc) VALUES ('{$member->getNome()}', '{$member->getPfc()}')";
            $sql = $connection->query($query);
        }

        //Alterar dados
        public function changeMember($member){
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET nome='{$member->getNome()}', pfc='{$member->getPfc()}' WHERE membro.id='{$member->getId()}'";
            $sql = $connection->query($query);
        }

        //Buscar dados 
        public function searchMember($id){
            $connection = Connection::getInstance();
            $query = "SELECT * FROM membro WHERE 'id' LIKE '$id'";
            $sql = $connection->query($query);

        }
    }
?>