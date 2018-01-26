<?php
    class Member {

        private $login;
        private $senha;

        function __construct($login, $senha) {
            $this->login = $login;
            $this->senha = $senha;
     }    
        
        function auth() {
            $conn = Connection::getInstance();
            $query = "SELECT * FROM admin WHERE user = '{$this->login}' AND senha = '{$this->senha}'";
            $sql = $conn->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            
            if($row) {
                $this->nome = $row['login'];
                $this->senha = $row['senha'];
                return true;
            } else {
                return false;
            }
        }

        function getSenha() {
            return $this->senha;
        }
        
        function getLogin() {
            return $this->login;
        }
        
    }

?>