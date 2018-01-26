<?php
    require_once("../database/Connection.class.php");
    require_once("../controllers/MembersController.class.php");
    session_start();
    
    /* Registrar*/
    if(isset($_POST["registerAttempt"])) { 
        $nome = $_POST["login"];
        $senha = $_POST["senha"];
        $member = new Member($nome, $senha, $sexo);

        $membersController = new MembersController();
        $membersController->registerNewMember($member);
        header("location:../index.php?register=true");
    }

    /*VERIFICAÇÃO DE LOGIN*/
    if(isset($_POST["loginAttempt"])) { 
        $login = $_POST["login"];
        $senha = $_POST["senha"]; 
        $member = new Member($login, $senha);

        if($member->auth()) {
            $_SESSION["auth"] = true;
            $_SESSION["member"] = $member;
            header("location:../view/home.php");
        } else {
            header("location:../index.php?valid=false");
        }
    }

    if(isset($_SESSION["auth"]) && $_SESSION["auth"] == true && isset($_POST["logoutAttempt"])) { 
        unset($_SESSION["auth"]);
        unset($_SESSION["member"]);
        session_destroy();
        header("location:../index.php"); 
    }
?>