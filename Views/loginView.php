<?php
    require_once "headerView.php";
?>
<link rel="stylesheet" href="../css/loginForm.css">
<div class="loginForm">
<form method="post" action="../login.php">
  <div class="form-group">
    <label for="LoginInput">Login</label>
    <input type="text" class="form-control" name="login" id="LoginInput" aria-describedby="loginHelp" placeholder="Your login" required>
    <small id="loginHelp" class="form-text text-muted">We'll never share your Login with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="passInput">Password</label>
    <input type="password" class="form-control" name="pass" id="passInput" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<?php 
    require_once "footerView.php";
?>