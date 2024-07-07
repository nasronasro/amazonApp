<?php
    session_start();
    require_once "../func.php";
    if(!$_POST["id"]){
        RedirectTo("../Views/ListProducts.php");
    }
    $iddel = $_POST["id"];
    if(count($_SESSION["currentCart"]) <= 1){
        unset($_SESSION["currentCart"]);
    }else{
        foreach($_SESSION["currentCart"] as $key=>$product){
            if($product["id"] == $iddel){
                unset($_SESSION["currentCart"][$key]);
            }
        }
    }

?>