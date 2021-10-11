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
        <title>Features</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="01_stylesheets/02_landing_page/02_style_features_page.css">
    </head>

    <body>
        <?php require '02_navbars/navbar_index.php' ?>

        <div class="split left">
            <div class="centered">
                <img src="images/02_mossv1_features_page.png" alt="Features">
            </div>
        </div>

        <div class="split right">
            <div class="centered">
                <div class="card" id="card1">
                    <h1 class="heading1">implemented features</h1>
                    <h2 class="heading2">and developer's notes</h2>
                </div>

                <div class="card" id="card2">
                    <p class="subheaders">Version 2.0.</p>
                    <ul>
                        <li>MOSS has been updated with new looks</li>
                        <li>Radio for RBN vessels was added</li>
                    </ul>

                    <br>

                    <p class="subheaders">Version 1.2.</p>
                    <ul>
                        <li>Now users can add remarks</li>
                        <li>Storob output error fixes</li>
                    </ul>

                    <br>

                    <p class="subheaders">Version 1.1.</p>
                    <ul>
                        <li>C2 System for PV80, PV80v2, and Shorebase was added</li>
                    </ul>

                    <br>

                    <p class="subheaders">Version 1.0.</p>
                    <ul>
                        <li>MOSS created with a basic login system and a forget password function</li>
                        <li>Table of basic status and its storob location are now updatable</li>
                        <li>Scanter for PV80 was added</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer">
            <p>Developed by Syahmi Rahim</p>
        </div>

    </body>

</html>