<?php 
session_start();
require_once "../func.php";

CheckConnection("../Views/loginView.php");
if(!isset($_GET["idmod"]) && !isset($_SESSION["idmod"])){
    RedirectTo("../Views/CategoriesView.php");
}else if(isset($_GET["idmod"]))
    $_SESSION["idmod"] = $_GET["idmod"];
else if(isset($_POST["label"])){
    require_once "../Modules/requets.php";
    $id = $_SESSION["idmod"];
    $label = $_POST["label"];
    ModifyCategory($id,$label);
    RedirectTo("../Views/CategoriesView.php");
}


include_once "../Views/headerView.php";
include_once "../Views/navbarAdminView.php";
?>

<form method="post" action="CategoryModifie.php">
  <div class="form-group">
    <label for="LabelInput">Category name</label>
    <input type="text" class="form-control" name="label" id="LabelInput" placeholder="the new Category name" required>
  </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>

<?php 
include_once "../Views/footerView.php";
?>
