<?php

if (isset($_POST['reset_request_submit'])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "https://moss.mms.com.bn:82/create_new_password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    // // url for testing
    // $url = "http://localhost/moss/v2/create_new_password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    require '00_db_connection.php';

    $email = $_POST["email"];

    $sql = "DELETE FROM password_reset WHERE password_reset_email=?";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was a delete error";
        exit();
    }

    else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO password_reset (password_reset_email, password_reset_selector, password_reset_token, password_reset_expires) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an insert error";
        exit();
    }

    else {
        $hashedtoken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedtoken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    // ini_set("SMTP","tls://smtp.gmail.com" );
    // ini_set("smtp_port","587");
    // ini_set("sendmail_from", 'us.syahmi@gmail.com');

    $send_to = $email;

    $subject =  'Password Reset for MOSS Account';

    $message = '<p>We got a request to reset your password. If you did not request for this, simply ignore this email</p>';
    $message .= '<p> Here is your password reset link:<br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: us.syahmi@gmail.com\r\n";
    $headers .= "Reply-To: us.syahmi@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    $mail = mail($send_to, $subject, $message, $headers);

    if( $mail == true ){
        header("location: ../forget_password.php?resetrequest=success");
    } else {
        header("location: ../forget_password.php?resetrequest=failed");
    }

} else {
    header("location: ../forget_password.php?resetrequest=unable");
}
?>