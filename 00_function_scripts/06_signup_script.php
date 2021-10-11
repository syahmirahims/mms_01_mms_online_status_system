<?php

if (isset($_POST['signup_submit'])) {

  require '00_db_connection.php';

  $email = $_POST['signup_email'];
  $password = $_POST['signup_password'];
  $passwordrepeat = $_POST['signup_password_repeat'];

  if (empty($email) || empty($password) || empty($passwordrepeat)) {
    header("location: ../create_user.php?error=emptyfields&email=".$email);
    exit();
  }

  elseif (!preg_match("|@mms.com.bn|", $email)) {
    header("location: ../create_user.php?error=invalidemail");
    exit();
  }

  elseif ($password !== $passwordrepeat) {
    header("location: ../create_user.php?passwordcheck&email=".$email);
    exit();
  }

  else {

    $sql = "SELECT user_email FROM users WHERE user_email=?";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../create_user.php?error=sqlselecterror");
    }

    else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultcheck = mysqli_stmt_num_rows($stmt);

      if ($resultcheck > 0) {
        header("location: create_user.php?error=emailtaken");
        exit();
      }

      else {
        $sql = "INSERT INTO users (user_email, user_password, user_type) VALUES (?, ?, 'user')";
        $stmt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../create_user.php?error=sqlinserterror");
          exit();
        }

        else {
          $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ss", $email, $hashedpassword);
          mysqli_stmt_execute($stmt);
          header("location: ../create_user.php?signup=success");
          exit();
        }
      }
    }
  }

  mysqli_stmt_close($stmt);
  mysqli_close($connection);

}

else {
  header("location: ../create_user.php");
}

?>
