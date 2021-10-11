<?php
session_start();

if (isset($_SESSION['userEmail'])) {
  header('location: home.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="01_stylesheets/02_landing_page/05_style_create_new_password_page.css">

    <!-- JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
    <div class="card" id="card1">
        <h1 class="heading1">MOSS</h1>
        <h2 class="heading2">create your new password to get back in</h2>
    </div>

    <!-- Error Handling -->
    <?php
        if (isset($_GET['newpassword'])) {
            if ($_GET['newpassword'] == 'empty') {
                echo '<script type="text/javascript">';
                echo '$(document).ready(function(){';
                echo '$("#successModal").modal("show");';
                echo '});';
                echo '</script>';
            } elseif ($_GET['newpassword'] == 'didntmatch') {
                echo '<script type="text/javascript">';
                echo '$(document).ready(function(){';
                echo '$("#failedModal").modal("show");';
                echo '});';
                echo '</script>';
            }
        }
        ?>
    
    <?php
        $selector = $_GET['selector'];
        $validator = $_GET['validator'];

        if (empty($selector) || empty($validator)) {
            echo "Could not validate your request";
        }

        else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
    ?>

    <div class="card" id="card2">
        <div class="form-group">
            <form action="00_function_scripts/04_create_new_password_script.php" method="POST">
                <input type="hidden" name="selector" value="<?php echo "$selector"; ?>">
                <input type="hidden" name="validator" value="<?php echo "$validator"; ?>">
                <input type="password" name="newPassword" placeholder="New Password" class="form-control">
                <input type="password" name="passwordRepeat" placeholder="Repeat New Password" class="form-control">
                <button class="btn btn-success" type="submit" name="reset_password_submit">Reset Password</button>
            </form>
        </div>
    </div>

    <?php
            }
        }
    ?>

    <div class="card" id="card3">
            <p>Back to <a href="login.php">Log In</a></p>
        </div>

    <div class="footer">
        <p>Developed by Syahmi Rahim</p>
    </div>

        <!-- Success Modal -->
    <div class="modal" id="successModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Email Sent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>An email that contains a link to renew your password has been sent. Please check your inbox.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- Failed Modal -->
        <div class="modal" id="failedModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sending Failed</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>We are not able to send the email to you. Please check if your email is valid.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unable Modal -->
        <div class="modal" id="unableModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Unable to Send</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>There is an error in the system. We have to check it up. Sorry for the inconvenience.</p>
                    </div>
                </div>
            </div>
        </div>

    <!-- JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>