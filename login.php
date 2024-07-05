<?php 
    session_start();
    require_once "func.php";
    if(!isset($_POST["login"])){
        RedirectTo("Views/loginView.php");
    }
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    if($login == "" || $pass== ""){
        RedirectTo("Views/loginView.php");
    }

    require_once "Modules/requets.php";
    if(SelectUser($login,$pass) != false){
        RedirectTo("Views/HomeView.php");
    }

    //select element to check if the login is correct
    if(SelectAdmin($login,$pass) == false)
        RedirectTo("Views/loginView.php");
    
    $_SESSION["AdminNom"] = SelectAdmin($login,$pass);
    RedirectTo("Views/AcceuilView.php");
?>