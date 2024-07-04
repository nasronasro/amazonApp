<?php 
function RedirectTo($loc){
    header("location:$loc");
    die();
}
function CheckConnection($loc){
    if(!isset($_SESSION["AdminNom"]))
        RedirectTo($loc);
}
function Test($testNum,$testMessage){
    echo "$testNum $testMessage";
}
?>