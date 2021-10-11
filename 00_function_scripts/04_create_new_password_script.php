<?php

if (isset($_POST['reset_password_submit'])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];

    $url = "https://moss.mms.com.bn:82/create_new_password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    // url for testing
    // $url = "http://localhost/moss/v2/create_new_password.php?selector=";

    $newpassword = $_POST["newPassword"];
    $newpasswordrepeat = $_POST["passwordRepeat"];

    if (empty($newpassword) || empty($newpasswordrepeat)) {
        header("location: ../**?newpassword=empty");
        exit();
    } elseif ($newpassword != $newpasswordrepeat) {
        header("location: ../**?newpassword=didntmatch");
        exit();
    }

    $currentDate = date("U");

    require '00_db_connection.php';

    $sql = "SELECT * FROM password_reset WHERE password_reset_selector=? AND password_reset_expires >= ?";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was a select error";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
        echo "You need to resubmit your reset request";
        exit();
        } else {
        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin, $row['password_reset_token']);

            if ($tokenCheck === false) {
                echo "You need to re-submit your reset request";
                exit();
            } elseif ($tokenCheck === true) {

                $tokenEmail = $row['password_reset_email'];

                $sql = "SELECT * FROM users WHERE user_email=?;";
                $stmt = mysqli_stmt_init($connection);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error";
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);

                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "There was an error!";
                        exit();
                    } else {
                        $sql = "UPDATE users SET user_password=? WHERE user_email=?;";
                        $stmt = mysqli_stmt_init($connection);

                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "There was an update error";
                            exit();
                        } else {
                            $newhashedpassword = password_hash($newpassword, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newhashedpassword, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM password_reset WHERE password_reset_email=?";
                            $stmt = mysqli_stmt_init($connection);

                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was a password reset delete error";
                                exit();
                            } else {
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("location: ../login.php?newpassword=passwordupdated");
                            }
                        }
                    }
                }
            }
        }
    } 
} else {
    header("location: ../login.php");
}

?>
