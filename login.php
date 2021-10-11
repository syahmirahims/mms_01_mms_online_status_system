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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="01_stylesheets/02_landing_page/03_style_login_page.css">

    <!-- JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <?php require '02_navbars/navbar_index.php' ?>

    <div class="card" id="card1">
        <h1 class="heading1">Log In</h1>
        <h2 class="heading2">to manage your ship parts better</h2>
    </div>

    <div class="card" id="card2">
        <div class="form-group">
            <form action="00_function_scripts/01_login_script.php" class="loginForm" method="POST" name="form">
                <input type="text" name="loginEmail" placeholder="Email" class="form-control">
                <input type="password" name="loginPassword" placeholder="Password" class="form-control">
                <button class="btn btn-success" type="submit" name="loginSubmit">Login</button>
            </form>
        </div>
    </div>

    <div class="card" id="card3">
        <a href="forget_password.php">Forgot Password?</a>
    </div>

    <div class="footer">
        <p>Developed by Syahmi Rahim</p>
    </div>

    <!-- Error Handling -->
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'emptyfields') {
                echo '<script type="text/javascript">';
                echo '$(document).ready(function(){';
                echo '$("#emptyfieldsModal").modal("show");';
                echo '});';
                echo '</script>';
            } elseif ($_GET['error'] == 'sqlselecterror') {
                echo '<script type="text/javascript">';
                echo '$(document).ready(function(){';
                echo '$("#sqlselecterrorModal").modal("show");';
                echo '});';
                echo '</script>';
            } elseif ($_GET['error'] == 'wrongpassword') {
                echo '<script type="text/javascript">';
                echo '$(document).ready(function(){';
                echo '$("#wrongpasswordModal").modal("show");';
                echo '});';
                echo '</script>';
            } elseif ($_GET['error'] == 'invalidemail') {
                echo '<script type="text/javascript">';
                echo '$(document).ready(function(){';
                echo '$("#invalidemailModal").modal("show");';
                echo '});';
                echo '</script>';
            }
        } elseif (isset($_GET['newpassword'])) {
            if ($_GET['newpassword'] == 'passwordupdated') {
                echo '<script type="text/javascript">';
                echo '$(document).ready(function(){';
                echo '$("#passwordupdatedModal").modal("show");';
                echo '});';
                echo '</script>';
            }
        }
    ?>

    <!-- emptyfieldsModal -->
    <div class="modal" id="emptyfieldsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Empty Fields</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Please fill in all the fields on this page.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- sqlselecterrorModal -->
    <div class="modal" id="sqlselecterrorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SQL Select Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>There's a problem within the system. We have to check that. Sorry for the inconvenience.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- wrongpasswordModal -->
    <div class="modal" id="wrongpasswordModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wrong Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Please enter the right password. If you forget your password, <a href="forget_password.php">click here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- invalidemailModal -->
    <div class="modal" id="invalidemailModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Invalid Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>You have entered the wrong email. Please try again.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- passwordupdatedModal -->
    <div class="modal" id="passwordupdatedModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" id="success">
                    <h5 class="modal-title" id="exampleModalLabel">Password Successfully Updated</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Your password has been updated successfully! Now you can enter MOSS with ease.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>