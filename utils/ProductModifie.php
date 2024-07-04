<?php 
session_start();
require_once "../func.php";
require_once "../requets.php";
CheckConnection("../Views/loginView.php");
if(!isset($_GET["idmod"]) && !isset($_SESSION["idmod"])){
    RedirectTo("../Views/ProductsView.php");
}else if(isset($_GET["idmod"]))
    $_SESSION["idmod"] = $_GET["idmod"];
else if(isset($_POST["label"])){
    $id = $_SESSION["idmod"];
    $label = $_POST["label"];
    $prix = $_POST["price"];
    $quantite = $_POST["quantite"];
    ModifyProduct($id,$label,$prix,$quantite);
    RedirectTo("../Views/ProductsView.php");
}

include_once "../Views/headerView.php";
include_once "../Views/navbarAdminView.php";
?>

<form method="post" action="ProductModifie.php">
  <div class="form-group">
    <label for="LabelInput">Product name</label>
    <input type="text" class="form-control" name="label" id="LabelInput" placeholder="the new Product name" required>
  </div>
  <div class="form-group">
    <label for="priceInput">Price</label>
    <input type="number" class="form-control" name="price" id="priceInput" placeholder="new price" required>
  </div>
  <div class="form-group">
    <label for="quantiteInput">Quantite</label>
    <input type="number" class="form-control" name="quantite" id="quantiteInput" placeholder="new quantite" required>
  </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>

<?php 
include_once "../Views/footerView.php";
?>
