<?php
session_start();

if (isset($_SESSION['userEmail'])) {
  header('location: home_page.php');
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <!--required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Signup Page</title>

  <!--Bootstrap & CSS links-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="01_stylesheets/06_style_create_user_page.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <h1 class="logo">MOSS</h1>
      <h2 class="slogan">Sign up for easier part tracking</h2><br>

      <div class="card-body">
        <div class="form-group">
          <form action="00_function_scripts/06_signup_script.php" method="POST">
            <input type="name" name="signup_email" placeholder="Email" class="form-control"><br>
            <input type="password" name="signup_password" placeholder="Password" class="form-control"><br>
            <input type="password" name="signup_password_repeat" placeholder="Repeat Password" class="form-control"><br>
            <button class="btn btn-primary" type="submit" name="signup_submit">Sign Up</button>
          </form>
        </div>

        <hr>
        <p>Already have an account? <a href="login.php">Log In</a></p>

      </div>
    </div>
  </div>


  <!--optional JavaScript-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
