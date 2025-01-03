<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- jQuery Validation Plugin -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <script src="js/login.js"></script>
</head>
<body class="log">
  <div class="wrapper">
    <h2>Login</h2>
    <?php
    if (isset($_GET['error'])) {
      ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <form  action="insert.php" method="post">
      <div class="input-box1">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box2">
        <input type="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="submit"  name="login" value="Login Now">
        
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="registration.php">SignUp now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>