<?php 
session_start();
require_once "../func.php";
CheckConnection("../Views/loginView.php");
if(!isset($_GET["idmod"])){
    RedirectTo("../Views/CategoriesView.php");
}
require_once "../Modules/requets.php";
DeleteCategory($_GET["idmod"]);
RedirectTo("../Views/CategoriesView.php");
?>