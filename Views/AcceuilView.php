<?php
    session_start();
    require_once "headerView.php";
    require_once "navbarAdminView.php"
?>
<div>
    <h1>Welcome <?= $_SESSION["AdminNom"] ?></h1>
</div>
<?php 
    require_once "footerView.php";
?>