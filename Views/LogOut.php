<?php session_start();
if(isset($_SESSION["AdminNom"])){
    unset($_SESSION["AdminNom"]);
}
if(isset($_SESSION["UserNom"]))
    unset($_SESSION["UserNom"]);

require_once "../func.php";
RedirectTo("loginView.php");
?>