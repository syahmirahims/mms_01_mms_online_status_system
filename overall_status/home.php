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
        <title>Overall Status Home Page</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../01_stylesheets/04_overall_status_page/01_style_home_page.css">

        <!-- JS CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../overall_status/home.php"><i class="fas fa-database" id="current"></i></a> <br><br>
            <a href="../ships/home.php"><i class="fas fa-ship"></i></a> <br><br>
            <a href="../storob/home.php"><i class="fas fa-exchange-alt"></i></a> <br><br>
            <a href="../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">OVERALL STATUS</h2>
        </div>

        <div class="card" id="card2">
            <p>
                Wanted to see the overview of each equipment? Then you have entered the right page. This page enables you to see the overall status of each equipment and it helps you to quicky identify which 
                component is operational and which is not. There are tables, which you can update, for each of the equipment which displays the condition, status, and the storob reference of the components.  
            </p>
        </div>

        <div class="row" id="card3">
            <div class="column">
                <div class="card" id="minicard">
                    <a href="c2system/home.php">
                        <img src="../images/03_round_c2system_overall_status_page.png" alt="C2 System">
                        <br>
                        <h3 class="card-headline">C2 System</h3>
                        <br>
                        <div class="card" id="textcard">
                            <p>Generates a real-time confident situational awareness display from the integration of shipborne sensors and weapon systems.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card" id="minicard">
                    <a href="radio/home.php">
                        <img src="../images/04_round_radio_overall_status_page.png" alt="Radio">
                        <br>
                        <h3 class="card-headline">Radio</h3>
                        <br>
                        <div class="card" id="textcard">
                            <p>Ensuring high connectivity, interoperable and secure communications allowing a network centric operation.</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="column">
                <div class="card" id="minicard">
                    <a href="scanter/home.php">
                        <img src="../images/05_round_scanter_overall_status_page.png" alt="Scanter">
                        <br>
                        <h3 class="card-headline">Scanter</h3>
                        <br>
                        <div class="card" id="textcard">
                            <p>Digital radar for combined surface and air surveillance, capable of detecting small targets suited for surveillance.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </body>
</html>