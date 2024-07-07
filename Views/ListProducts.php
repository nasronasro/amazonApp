<?php 
    require_once "../Controllers/resizeController.php";
    foreach($data as $line){ 
        if($i%$cardNumber == 0){
            echo "<div class='row'>";
        }
?>
        <div class="card col border-radius-5 " >
            <div class="img-container">
                <img class="card-img-top" src="..." alt="Card image cap">
            </div>
            <div class="card-body">
                <p class="card-title" id="product-name<?=$i?>"><?= $line["label"] ?></p>
                <div class="d-flex gap-1">
                    <div>
                        <p id="product-price<?=$i?>">$<?= $line["prix"] ?></p> 
                    </div>  
                    
                </div>
                <div>
                    <a href="ProductView.php?name=<?=$line["label"]?>&id=<?=$i?>" class="btn btn-primary addToCart">View More</a>
                </div>
            </div>
        </div>
<?php
        $i++;
        if($i%$cardNumber == 0)
            echo "</div>";
    }
        if($i%4 != 0)
            echo "</div>";
?>
