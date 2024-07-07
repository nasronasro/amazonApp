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
            ?>
                    <div>
                        <input type="button" value="reset" id="resetBtn">
                    </div>  
            <?php       
                    foreach($_SESSION["currentCart"] as $product)
                    {
            ?>          
                        <div class="product">
                            <div class="d-flex ">
                                <p>Name : </p>
                                <p class="productname"><?=$product["name"]?></p>
                            </div>
                            <div class="d-flex">
                                <p>Price : </p>
                                <p class="productprice"><?=$product["price"]?></p>
                            </div>
                            <div class="d-flex">
                                <p>Quantite : </p>
                                <p class="productQte"><?=$product["Quantite"]?></p>
                            </div>
                           
                            
                            <input type="button" class="btn btn-primary removeBtn" id="remove<?=$product["id"]?>" value="remove">
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
<script src="../js/RemoveFromCartAjax.js"></script>
<script src="../js/ResetCartAjax.js"></script>