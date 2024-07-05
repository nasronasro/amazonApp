<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AmazonWebsite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:3000/Views/AcceuilView.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:3000/Views/CategoriesView.php">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:3000/Views/ProductsView.php">Products</a>
      </li>
    </ul>
    <span class="navbar-text">
      <?php 
      if(isset($_SESSION["AdminNom"]))
        echo "<details><summary>", $_SESSION["AdminNom"], "</summary><a href='LogOut.php' class='btn btn-primary'>Out</a> </detail>";
      else
        echo "<a href='loginView.php' class='btn btn-primary'>Login</a>"
      ?>
    </span>
  </div>
</nav>
