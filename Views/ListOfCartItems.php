<?php
    session_start();
    require_once "headerView.php";
    require_once "navbarUserView.php";
    

?>
    <link rel="stylesheet" href="../css/product.css">
    <div class="d-flex">
        <div class="Container main-container d-flex flex-column w-75">
            <?php 
                if(isset($_SESSION["currentCart"])){                 
                    foreach($_SESSION["currentCart"] as $product)
                    {
            ?>
                        <div class="product">
                            <p class="productname"><?=$product["name"]?></p>
                            <p class="productprice"><?=$product["price"]?></p>
                        </div>
            <?php
                    }
                }else{
            ?>
                <h1>The cart is empty</h1>
            <?php
                }
            ?>
        </div>
        <div class="w-25 ads">
            <p>ads here</p>
        </div>
    </div>
<?php 
    require_once "footerView.php";
?>