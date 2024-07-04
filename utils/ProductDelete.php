<?php 
session_start();
require_once "../func.php";

CheckConnection("../Views/loginView.php");
if(!isset($_GET["idmod"])){
    RedirectTo("../Views/ProductsView.php");
}
require_once "../requets.php";
DeleteProduct($_GET["idmod"]);
RedirectTo("../Views/ProductsView.php");
?>