<?php
    $i=0;
    if(isset($_POST["Winwidth"])){
        $screenSize = (int)$_POST["Winwidth"];
        echo "screen size is : $screenSize";
        $cardNumber = (($screenSize * 75) / 100) / 200;
    }
    else
        $cardNumber = 4;
    require "../Modules/resiseModule.php";
    require "../Views/ListProducts.php"
?>