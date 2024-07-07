<?php 
    session_start();
    require_once "../func.php";
    
    if(!isset($_POST["label"])) die();
    
    //create session or get the value stored
    $productList = $_SESSION["currentCart"] ?? [];
    $_SESSION["currentCart"] = $productList;

    $id = $_SESSION["idInc"] ?? 0;
    $_SESSION["idInc"] = $id;

        $label = $_POST["label"];
        $prix = $_POST["price"];
        print_r($_POST["label"],$_POST["price"]);
        $product = ["id"=> $id,"name" => $label , "price" => $prix,"Quantite" => 1];
        $prodExists = false;
        foreach($productList as $key=>$prod){
            if($prod["name"] == $product["name"] ){
                $productList[$key]["Quantite"]++;
                $prodExists = true;
            }
        }
        if($prodExists == false)
            $productList[] = $product;
        
        
        $_SESSION["currentCart"] = $productList;
        
        $id++;
        $_SESSION["idInc"] = $id;
        RedirectTo("../Views/ListProducts.php");
?>