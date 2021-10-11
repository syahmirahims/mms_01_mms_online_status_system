<?php

if (isset($_POST['loginSubmit'])) {
   require '00_db_connection.php';

  $email = $_POST['loginEmail'];
  $password = $_POST['loginPassword'];

  if (empty($email) || empty($password)) {
    header("location: ../login.php?error=emptyfields");
  }

  else {
    $sql = "SELECT * FROM users WHERE user_email=?";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../login.php?error=sqlselecterror");
      exit();
    }

    else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        $passwordcheck = password_verify($password, $row['user_password']);

        if ($passwordcheck == false) {
          header("location: ../login.php?error=wrongpassword");
          exit();
        }

        elseif ($passwordcheck == true) {
          session_start();
          $_SESSION['userId'] = $row['user_id'];
          $_SESSION['userEmail'] = $row['user_email'];

          header("location: ../home.php");
          exit();
        }

        else {
          header("location: ../login.php?error=wrongpassword");
          exit();
        }
      }

      else {
        header("location: ../login.php?error=invalidemail");
        exit();
      }
    }
  }
}

else {
  header("location: ../login.php");
  exit();
}

?>
