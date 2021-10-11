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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/00_moss_logo.png" type="image/png">
        <title>Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="01_stylesheets/02_landing_page/01_style_index.css">
    </head>

    <body class="body">
        <?php require '02_navbars/navbar_index.php' ?>

        <div class="split left">
            <div class="centered">
                <div class="card" id="card1">
                    <h1 class="heading1">track the parts of your ship</h1>
                    <h2 class="heading2">to manage it better</h2>
                </div>

                <div class="card" id="card2">
                    <p>
                    MOSS is an online management system for storob related things. Here, you can 
                    update part status, condition, and its wherabouts in real-time.  The good thing is 
                    that it can be accessed by anyone at anytime and the system will always be improving.
                    </p>
                    <br>
                    <p>
                    There are many parts in a ship and many ships will make it harder to keep track of 
                    each components. MOSS is created with convenience in mind, to ease part tracking
                    and to provide a better oversight of what is going on.
                    </p>
                </div>
            </div>
        </div>

        <div class="split right">
            <div class="centered">
                <img src="images/01_kdb06_index_page.png" alt="Ship Picture">
            </div>
        </div>

        <div class="footer">
            <p>Developed by Syahmi Rahim</p>
        </div>

    </body>
</html>