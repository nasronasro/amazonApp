<?php 
//reset
    session_start();
    
    if(isset($_SESSION["currentCart"]))
        unset($_SESSION["currentCart"]);

    if(isset($_SESSION["idInc"]))
        unset($_SESSION["idInc"]) ;
?>