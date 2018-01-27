<?php
    class Member {

        private $nome;
        private $pfc;
        private $id;

        function __construct($nome, $pfc, $id) {
            $this->nome = $nome;
            $this->pfc = $pfc;
            $this->id = $id;
        }      

        function getNome() {
            return $this->nome;
        }
        
        function getPfc() {
            return $this->pfc;
        }

        function getId(){
            return $this->id;
        }
    }
?>