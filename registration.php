<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- jQuery Validation Plugin -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <!-- Custom Script -->
  <script src="js/register.js"></script>
</head>

<body class="log">
  <div class="wrapper">
    <h2>SignUp</h2>
    <?php
    if (isset($_GET['error'])) {
      ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <form id="registrationForm" action="insert.php" method="post">
      <div class="input-box">
        <input id="usernameInput" name="username" type="text" placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input id="emailInput" name="email" type="text" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input id="passwordInput" name="password" type="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input id="confirmPasswordInput" name="confirmPassword" type="password" placeholder="Confirm password" required>
      </div>

      <div class="input-box button">
        <input type="submit" name="signUp" value="SignUp">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>

</html>