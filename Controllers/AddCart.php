<?php 
    session_start();
    require_once "../func.php";

    if(!isset($_POST["label"])) die();
    
    //create session or get the value stored
    $productList = $_SESSION["currentCart"] ?? [];
    $_SESSION["currentCart"] = $productList;

    $label = $_POST["label"];
    $prix = $_POST["price"];
    print_r($_POST["label"],$_POST["price"]);
    $product = ["name" => $label , "price" => $prix];
    $productList[] = $product;
    $_SESSION["currentCart"] = $productList;
    
    echo($_SESSION["name is : $label "]);
        /*
    if(preg_match("/^[A-Za-z0-9\s]{3,25}$/",$label) && is_numeric($prix)){
        
    }*/
    
?>