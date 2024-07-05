

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
                <p class="card-title"><?= $line["label"] ?></p>
                <div class="d-flex gap-1">
                    <div>
                        <p >$<?= $line["prix"] ?></p> 
                    </div>  
                </div>
                <div>
                    <input type="button" value="Add To Cart" class="btn btn-primary">
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