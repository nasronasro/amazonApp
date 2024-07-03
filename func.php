<?php 
function RedirectTo($loc){
    header("location:$loc");
    die();
}
?>