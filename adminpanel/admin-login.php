<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../CSS/admin/login-admin-style.CSS">
</head>

<body>

  <div class="login-admin">
    <h2>Admin Login</h2>
    <?php
    if (isset($_GET['error'])) {
      ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <form class="login-form" action="admin_login_db.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input class="inputBox" type="text" name="username" id="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="inputBox" type="password" name="password" id="password" required>
      </div>
      <input type="submit" name="login" value="Login" class="loginA">
    </form>
  </div>
</body>

</html>