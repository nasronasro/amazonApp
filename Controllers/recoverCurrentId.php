<?php 
session_start();
$id = $_SESSION["idInc"] ?? 0;
    $_SESSION["idInc"] = $id;
    echo $id;
?>