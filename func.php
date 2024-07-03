<?php 
function RedirectTo($loc){
    header("location:$loc");
    die();
}

function Test($testNum,$testMessage){
    echo "$testNum $testMessage";
}
?>