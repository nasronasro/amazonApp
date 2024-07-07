<?php 
     session_start();
     require_once "../func.php";
     require_once "headerView.php";
     require_once "navbarUserView.php";
     if(!isset($_GET["name"])){
        RedirectTo("ListProducts.php");
     }
     foreach($_SESSION["Products"] as $key=>$prod){
        if($prod["label"] == $_GET["name"]){
            $product = $prod;
        }
    }
    if(isset($_SESSION["currentCart"])){
        print_r($_SESSION["currentCart"]);
        print_r(count($_SESSION["currentCart"]));
    }
?>
    <div class="d-flex">
        <div class="Container main-container d-flex flex-column w-75">
            <p id="product-name"><?= $product["label"]?></p>
            <p id="product-price">$<?= $product["prix"]?></p>
            <input type="button" value="add to cart" class="btn btn-primary addToCart" id="AddCart<?=$_GET["id"]?>">
        </div>
        <div class="w-25 ads">
            <p>ads here</p>
        </div>
    </div>
    

<?php 
    require_once "footerView.php";
?>
<script src="../js/addCartAjax.js"></script>