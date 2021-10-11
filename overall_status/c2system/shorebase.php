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
        <title>C2 System Shorebase Page</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../01_stylesheets/05_c2system_page/table/03_style_table_shorebase.css">
        <link rel="stylesheet" href="../../01_stylesheets/05_c2system_page/04_style_shorebase_page.css">

        <!-- JS CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require "../../00_function_scripts/overall_status/c2system/03_c2system_shorebase.php"; ?>

        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../../overall_status/home.php"><i class="fas fa-database" id="current"></i></a> <br><br>
            <a href="../../ships/home.php"><i class="fas fa-ship"></i></a> <br><br>
            <a href="../../storob/home.php"><i class="fas fa-exchange-alt"></i></a> <br><br>
            <a href="../../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">SHOREBASE C2 SYSTEM STATUS</h2>
        </div>

        <!-- #################### Menu #################### -->

        <!-- #################### Server Rack #################### -->
        <section>
            <div class="card card2" id="serverRack">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h4>Server Rack</h4></td>
                        <td class="back2Top"></td>
                    </tr>
                </table>
            </div>

            <div class="card card2" id="mfw2">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h6>Multi-Function Workstation (MFW) 2</h6></td>
                        <td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
                    </tr>
                </table>
            </div>
            
            <div class="card" id="card3">
                <table>
                    <tr>
                        <th class="id">ID</th>
                        <th class="componentName">Component Name</th>
                        <th class="status">Status</th>
                        <th class="condition">Condition</th>
                        <th class="storob">Storob</th>
                        <th class="remarks">Remarks</th>
                    </tr>

                    <!-- Opening Code for Fetching Data -->
                    <?php while ($srrow = $serverrack-> fetch_assoc()): ?>

                    <tr>
                        <td class="id"><?php echo $srrow['id']; ?></td>
                        <td class="componentName"><?php echo $srrow['name']; ?></td>
                        <td class="status"><?php echo $srrow['c_status']; ?></td>
                        <td class="condition"><?php echo $srrow['c_condition']; ?></td>
                        <td class="storob"><?php echo $srrow['storob']; ?></td>
                        <td class="remarks"><?php echo $srrow['remarks']; ?></td>
                    </tr>

                    <!-- Closing Code for Fetching Data -->
                    <?php endwhile; ?>
                </table>
            </div>
        </section>

        <!-- #################### Workstation #################### --> 
        <div class="card card2">
            <table class="tableTitle">
                <tr>
                    <td class="title"><h4>Workstation</h4></td>
                    <td class="back2Top"></td>
                </tr>
            </table>
        </div>

        <!-- #################### Multi-Function Workstation (MFW) 1 #################### --> 
        <section>
            <div class="card card2" id="mfw1">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h6>Multi-Function Workstation (MFW) 1</h6></td>
                        <td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
                    </tr>
                </table>
            </div>
            
            <div class="card" id="card3">
                <table>
                    <tr>
                        <th class="id">ID</th>
                        <th class="componentName">Component Name</th>
                        <th class="status">Status</th>
                        <th class="condition">Condition</th>
                        <th class="storob">Storob</th>
                        <th class="remarks">Remarks</th>
                    </tr>

                    <!-- Opening Code for Fetching Data -->
                    <?php while ($mfw1row = $mfw1-> fetch_assoc()): ?>

                    <tr>
                        <td class="id"><?php echo $mfw1row['id']; ?></td>
                        <td class="componentName"><?php echo $mfw1row['name']; ?></td>
                        <td class="status"><?php echo $mfw1row['c_status']; ?></td>
                        <td class="condition"><?php echo $mfw1row['c_condition']; ?></td>
                        <td class="storob"><?php echo $mfw1row['storob']; ?></td>
                        <td class="remarks"><?php echo $mfw1row['remarks']; ?></td>
                    </tr>

                    <!-- Closing Code for Fetching Data -->
                    <?php endwhile; ?>
                </table>
            </div>
        </section>

        <!-- #################### Multi-Function Workstation (MFW) 2 #################### -->
        <section>
            <div class="card card2" id="mfw2">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h6>Multi-Function Workstation (MFW) 2</h6></td>
                        <td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
                    </tr>
                </table>
            </div>
            
            <div class="card" id="card3">
                <table>
                    <tr>
                        <th class="id">ID</th>
                        <th class="componentName">Component Name</th>
                        <th class="status">Status</th>
                        <th class="condition">Condition</th>
                        <th class="storob">Storob</th>
                        <th class="remarks">Remarks</th>
                    </tr>

                    <!-- Opening Code for Fetching Data -->
                    <?php while ($mfw2row = $mfw2-> fetch_assoc()): ?>

                    <tr>
                        <td class="id"><?php echo $mfw2row['id']; ?></td>
                        <td class="componentName"><?php echo $mfw2row['name']; ?></td>
                        <td class="status"><?php echo $mfw2row['c_status']; ?></td>
                        <td class="condition"><?php echo $mfw2row['c_condition']; ?></td>
                        <td class="storob"><?php echo $mfw2row['storob']; ?></td>
                        <td class="remarks"><?php echo $mfw2row['remarks']; ?></td>
                    </tr>

                    <!-- Closing Code for Fetching Data -->
                    <?php endwhile; ?>
                </table>
            </div>
        </section>

        <!-- ########################################################### -->
        <!-- ############## Cell Colour Automation Script ############## -->
        <!-- ########################################################### -->
        <section>
            <!-- Status: Operational -->
            <script>
            td_array = document.getElementsByTagName('td');
            check_value = "Operational";

            for (i = 0; i < td_array.length; i++) {
                if (td_array[i].textContent == check_value) {
                td_array[i].style.background = "lightgreen";
                td_array[i].style.color = "";
                };
            };
            </script>

            <!-- Status: Non-Operational -->
            <script>
            td_array = document.getElementsByTagName('td');
            check_value = "Non-Operational";

            for (i = 0; i < td_array.length; i++) {
                if (td_array[i].textContent == check_value) {
                td_array[i].style.background = "tomato";
                td_array[i].style.color = "white";
                };
            };
            </script>

            <!-- Status: Operational with Issue -->
            <script>
            td_array = document.getElementsByTagName('td');
            check_value = "Operational with Issue";

            for (i = 0; i < td_array.length; i++) {
                if (td_array[i].textContent == check_value) {
                td_array[i].style.background = "orange";
                td_array[i].style.color = "black";
                };
            };
            </script>
        </section>

    </body>
</html>