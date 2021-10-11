<?php
session_start();

if (!isset($_SESSION['userEmail'])) {
  header('location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Craft Home Page</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../../01_stylesheets/08_ships_page/04_style_ijtihad_page.css">

        <!-- JS CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../../../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../../../overall_status/home.php"><i class="fas fa-database"></i></a> <br><br>
            <a href="../../../ships/home.php"><i class="fas fa-ship" id="current"></i></a> <br><br>
            <a href="../../../storob/home.php"><i class="fas fa-exchange-alt"></i></a> <br><br>
            <a href="../../../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">LANDING CRAFT</h2>
        </div>

        <div class="row" id="card2">
            <div class="column">
                <div class="card" id="minicard">
                    <a href="kdbl31/home.php">
                        <img src="../../../images/21_round_l31_pennant_number.png" alt="KDBL31">
                        <br>
                        <h3 class="card-headline">KDBL31</h3>
                        <p>Damuan</p>
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card" id="minicard">
                    <a href="kdbl32/home.php">
                        <img src="../../../images/22_round_l32_pennant_number.png" alt="KDBL32">
                        <br>
                        <h3 class="card-headline">KDBL32</h3>
                        <p>Puni</p>
                    </a>
                </div>
            </div>
          
            <div class="column">
                <div class="card" id="minicard">
                    <a href="kdbl33/home.php">
                        <img src="../../../images/23_round_l33_pennant_number.png" alt="KDBL33">
                        <br>
                        <h3 class="card-headline">KDBL33</h3>
                        <p>Serasa</p>
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card" id="minicard">
                    <a href="kdbl34/home.php">
                        <img src="../../../images/24_round_l34_pennant_number.png" alt="KDBL34">
                        <br>
                        <h3 class="card-headline">KDBL34</h3>
                        <p>Teraban</p>
                    </a>
                </div>
            </div>
        </div>

    </body>
</html>