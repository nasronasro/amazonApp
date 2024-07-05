<?php
    session_start();
    require_once "headerView.php";
    require_once "navbarUserView.php";
    require_once "../requets.php";

    ?>
    <div class="d-flex">
        <div class="Container card-container d-flex flex-column w-75">
            <?php listProducts(); ?>
        </div>
        <div class="w-25 ads">
            <p>ads here</p>
        </div>
    </div>
<?php 
    require_once "footerView.php";
?>