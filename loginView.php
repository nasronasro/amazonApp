<?php
    require_once "headerView.php";
?>
<form method="post" action="login.php">
  <div class="form-group">
    <label for="LoginInput">Login</label>
    <input type="text" class="form-control" id="LoginInput" aria-describedby="loginHelp" placeholder="Your login">
    <small id="loginHelp" class="form-text text-muted">We'll never share your Login with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="passInput">Password</label>
    <input type="password" class="form-control" id="passInput" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

<?php 
    require_once "footerView.php";
    
?>