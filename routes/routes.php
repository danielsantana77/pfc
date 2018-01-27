<?php
    require_once("../database/Connection.class.php");
    require_once("../controllers/MembersController.class.php");
    require_once("../controllers/UserController.class.php");
    session_start();
    
    /* Registrar*/
    if(isset($_POST["registerAttempt"])) { 
        $nome = $_POST["nome"];
        $pfc = $_POST["pfc"];
        $member = new Member($nome, $pfc);

        $membersController = new MembersController();
        $membersController->registerNewMember($member);
        header("location:../index.php?register=true");
    }

    //Alterar membro
    if(isset($_POST["changeMember"])){
        $nome = $_POST["nome"];
        $pfc = $_POST["pfc"];
        $id = $_POST["id"];
        $member = new Member($nome, $pfc, $id);

        $membersController = new MembersController();
        $membersController->changeMember($member);
        header("location:../index.php?register=true");
    }

    //Procurar membro
    if(isset($_POST["searchMember"])){

        $id = $_POST["id"];

        $membersController = new MembersController();
        $dado = $membersController->searchMember($id);
        
        echo $dado;
    }

    /*VERIFICAÇÃO DE LOGIN*/
    if(isset($_POST["loginAttempt"])) { 
        $login = $_POST["login"];
        $senha = $_POST["senha"]; 
        $admin = new User($login, $senha);

        if($admin->auth()) {
            $_SESSION["auth"] = true;
            $_SESSION["admin"] = $admin;
            header("location:../cadastro.php");
        } else {
            header("location:../index.php?valid=false");
        }
    }

    //Logout
    if(isset($_SESSION["auth"]) && $_SESSION["auth"] == true && isset($_POST["logoutAttempt"])) { 
        unset($_SESSION["auth"]);
        unset($_SESSION["admin"]);
        session_destroy();
        header("location:../index.php"); 
    }
?>