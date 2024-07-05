<?php
    session_start();
    require_once "headerView.php";
    require_once "navbarUserView.php";
    require_once "../Modules/requets.php";

    ?>
    <div class="d-flex">
        <div class="Container card-container d-flex flex-column w-75">
            <h1>Welcome</h1>
        </div>
        <div class="w-25 ads">
            <p>ads here</p>
        </div>
    </div>
<?php 
    require_once "footerView.php";
?>
<script src="../js/screenAjax.js"></script>