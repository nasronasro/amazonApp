<?php 
    session_start();
    require_once "func.php";
    if(!isset($_POST["login"])){
        RedirectTo("loginView.php");
    }
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    if($login == "" || $pass== ""){
        RedirectTo("loginView.php");
    }

    require_once "requets.php";
    //select element to check if the login is correct
    if(SelectAdmin($login,$pass) == false)
        RedirectTo("loginView.php");
    
    $_SESSION["AdminNom"] = SelectAdmin($login,$pass);
    RedirectTo("AcceuilView.php");
?>