<?php
    session_start();
    require_once "../func.php";
    CheckConnection("loginView.php");
    require_once "headerView.php";
    require_once "navbarAdminView.php"
?>
<div class="content d-flex w-100 vh-100" >
    <div class="w-75">
    <table class="table">
  <thead>
    <tr>
    <th scope="row">idProduct</th>
    <th>Category name</th>
    <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        include_once "../Modules/requets.php";
        DisplayCategories();
    ?>
  </tbody>
</table>
    </div>
    <div class="w-25">
        <p>ads</p>
    </div>
</div>
<?php 
    require_once "footerView.php";
?>