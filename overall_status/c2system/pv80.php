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
        <title>C2 System Home Page</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../01_stylesheets/05_c2system_page/table/01_style_table_pv80.css">
        <link rel="stylesheet" href="../../01_stylesheets/05_c2system_page/02_style_pv80_page.css">

        <!-- JS CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require "../../00_function_scripts/overall_status/c2system/01_c2system_pv80.php"; ?>

        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../../overall_status/home.php"><i class="fas fa-database" id="current"></i></a> <br><br>
            <a href="../../ships/home.php"><i class="fas fa-ship"></i></a> <br><br>
            <a href="../../storob/home.php"><i class="fas fa-exchange-alt"></i></a> <br><br>
            <a href="../../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">PV80 C2 SYSTEM STATUS</h2>
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

            <div class="card" id="card3">
                <table>
                    <tr>
                        <th class="componentName" rowspan="2">Component Name</th>
                        <th colspan="3">KDB06</th>
                        <th colspan="3">KDB07</th>
                        <th colspan="3">KDB08</th>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <th>Condition</th>
                        <th class="storob">Storob</th>
                        <th>Status</th>
                        <th>Condition</th>
                        <th class="storob">Storob</th>
                        <th>Status</th>
                        <th>Condition</th>
                        <th class="storob">Storob</th>
                    </tr>

                    <!-- ~~~~~~~~~~~~~~ Row 1: LAN Switch A ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[0]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[0]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[0]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: LAN Switch B ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[1]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[1]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[1]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: Service Console ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[2]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[2]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[2]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: SKWS SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[3]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[3]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[3]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[3]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: Radar Broadcast Unit (RBU) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[4]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[4]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[4]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[4]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[4]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[4]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[4]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[4]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[4]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[4]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[4]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[4]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: C2 System ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[5]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[5]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[5]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[5]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[5]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[5]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[5]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[5]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[5]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[5]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[5]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[5]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: Map/User Server ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[6]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[6]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[6]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[6]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[6]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[6]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[6]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[6]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[6]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[6]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[6]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[6]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 8: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[7]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[7]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[7]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[7]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[7]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[7]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[7]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[7]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[7]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[7]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[7]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[7]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[7]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[7]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 9: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $sr06array[8]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $sr06array[8]['name']; ?></td>
                            <td class="status status06"><?php echo $sr06array[8]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $sr06array[8]['c_condition']; ?></td>
                            <td class="storob storob06"><?php echo $sr06array[8]['storob']; ?></td>
                            <td class="id id07"<?php echo $sr07array[8]['id']; ?>></td>
                            <td class="status status07"><?php echo $sr07array[8]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $sr07array[8]['c_condition']; ?></td>
                            <td class="storob storob07"><?php echo $sr07array[8]['storob']; ?></td>
                            <td class="id id08"><?php echo $sr08array[8]['id']; ?></td>
                            <td class="status status08"><?php echo $sr08array[8]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $sr08array[8]['c_condition']; ?></td>
                            <td class="storob storob08"><?php echo $sr08array[8]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $sr06array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr07array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $sr08array[8]['remarks']; ?></td>
                        </tr>
                    </div>


                </table>
            </div>
        </section>

        <!-- #################### WMFCC Rack 1 #################### -->
        <section>
          <div class="card card2" id="wmfccRack1">
            <table class="tableTitle">
              <tr>
                <td class="title"><h4>WMFCC Rack 1</h4></td>
                <td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
              </tr>
            </table>
          </div>

          	<div class="card" id="card3">
            	<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

              		<!-- ~~~~~~~~~~~~~~ Row 1: EXO-C2  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: EXO-HMI  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: ESM SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[2]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[2]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[2]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[3]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[3]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[3]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[3]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: WMFCC 1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[4]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[4]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[4]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[4]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[4]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[4]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[4]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[4]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[4]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[4]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[4]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[4]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: Keyboard/Mouse Extender    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[5]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[5]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[5]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[5]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[5]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[5]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[5]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[5]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[5]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[5]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[5]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[5]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: WMFCC 3 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[6]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[6]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[6]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[6]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[6]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[6]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[6]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[6]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[6]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[6]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[6]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[6]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 8: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[7]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[7]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[7]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[7]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[7]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[7]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[7]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[7]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[7]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[7]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[7]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[7]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[7]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[7]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 9: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[8]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc1rack06_array[8]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc1rack06_array[8]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc1rack06_array[8]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc1rack06_array[8]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc1rack07_array[8]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc1rack07_array[8]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc1rack07_array[8]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc1rack07_array[8]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc1rack08_array[8]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc1rack08_array[8]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc1rack08_array[8]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc1rack08_array[8]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc1rack06_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack07_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc1rack08_array[8]['remarks']; ?></td>
                        </tr>
                    </div>
	            </table>
    	    </div>
		</section>

        <!-- #################### WMFCC Rack 2 #################### -->
		<section>
			<div class="card card2" id="wmfccRack2">
				<table class="tableTitle">
					<tr>
						<td class="title"><h4>WMFCC Rack 2</h4></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

					<!-- ~~~~~~~~~~~~~~ Row 1: CFCS SSIU  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc2rack06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: SC-4100 (Scanter) SSIU  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc2rack06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc1rack06_array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[2]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[2]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[2]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: WMFCC 2 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc2rack06_array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[3]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[3]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[3]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[3]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: Keyboard/Mouse Extender ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc2rack06_array[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[4]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[4]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[4]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[4]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[4]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[4]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[4]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[4]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[4]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[4]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[4]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[4]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: WMFCC 4    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc2rack06_array[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[5]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[5]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[5]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[5]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[5]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[5]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[5]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[5]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[5]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[5]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[5]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[5]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc2rack06_array[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[6]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[6]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[6]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[6]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[6]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[6]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[6]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[6]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[6]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[6]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[6]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[6]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 8: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfcc2rack06_array[7]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfcc2rack06_array[7]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfcc2rack06_array[7]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfcc2rack06_array[7]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfcc2rack06_array[7]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfcc2rack07_array[7]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfcc2rack07_array[7]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfcc2rack07_array[7]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfcc2rack07_array[7]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfcc2rack08_array[7]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfcc2rack08_array[7]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfcc2rack08_array[7]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfcc2rack08_array[7]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfcc2rack06_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack07_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfcc2rack08_array[7]['remarks']; ?></td>
                        </tr>
                    </div>
				</table>
			</div>
		</section>

        <!-- #################### Radio Room #################### -->       
        <section>
			<div class="card card2" id="radioRoom">
				<table class="tableTitle">
					<tr>
						<td class="title"><h4>Radio Room</h4></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

					<!-- ~~~~~~~~~~~~~~ Row 1: Datalink SSIU  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $radioroom06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $radioroom06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $radioroom06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $radioroom06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $radioroom06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $radioroom07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $radioroom07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $radioroom07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $radioroom07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $radioroom08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $radioroom08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $radioroom08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $radioroom08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $radioroom06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $radioroom07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $radioroom08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: Radio Modem ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $radioroom06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $radioroom06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $radioroom06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $radioroom06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $radioroom06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $radioroom07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $radioroom07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $radioroom07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $radioroom07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $radioroom08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $radioroom08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $radioroom08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $radioroom08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $radioroom06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $radioroom07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $radioroom08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>
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

        <!-- #################### WMFC 1 (Workstation) #################### --> 
        <section>
			<div class="card card2" id="wmfc1">
				<table class="tableTitle">
					<tr>
						<td class="title"><h6>WMFC 1</h6></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

              		<!-- ~~~~~~~~~~~~~~ Row 1: Monitor 1 (Left)  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: Monitor 2 (Right)  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: Utility Module ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[2]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[2]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[2]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: Fire Pedal ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[3]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[3]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[3]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[3]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: Keyboard ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[4]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[4]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[4]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[4]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[4]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[4]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[4]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[4]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[4]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[4]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[4]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[4]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: Trackball    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[5]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[5]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[5]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[5]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[5]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[5]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[5]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[5]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[5]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[5]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[5]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[5]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: Joystick ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[6]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[6]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[6]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[6]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[6]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[6]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[6]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[6]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[6]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[6]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[6]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[6]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 8: Touch Input Display (TID) 1 [Left] ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[7]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[7]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[7]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[7]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[7]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[7]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[7]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[7]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[7]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[7]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[7]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[7]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[7]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[7]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 9: Touch Input Display (TID) 2 [Right] ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[8]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[8]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[8]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[8]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[8]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[8]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[8]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[8]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[8]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[8]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[8]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[8]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[8]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[8]['remarks']; ?></td>
                        </tr>
                    </div>

					<!-- ~~~~~~~~~~~~~~ Row 10: Light Panel  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[9]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[9]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[9]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[9]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[9]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[9]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[9]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[9]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[9]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[9]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[9]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[9]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[9]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[9]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 11: Media Converter  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[10]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[10]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[10]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[10]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[10]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[10]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[10]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[10]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[10]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[10]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[10]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[10]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[10]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 12: Power Distribution Unit (PDU)~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[11]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[11]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[11]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[11]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[11]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[11]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[11]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[11]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[11]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[11]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[11]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[11]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[11]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[11]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 13: LAN Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[12]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[12]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[12]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[12]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[12]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[12]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[12]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[12]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[12]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[12]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[12]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[12]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[12]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[12]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 14: Power and Audio Module ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[13]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[13]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[13]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[13]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[13]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[13]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[13]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[13]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[13]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[13]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[13]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[13]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[13]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[13]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 15: Speaker (Left)    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[14]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[14]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[14]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[14]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[14]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[14]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[14]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[14]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[14]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[14]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[14]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[14]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[14]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[14]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 16: Speaker (Right) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[15]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[15]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[15]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[15]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[15]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[15]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[15]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[15]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[15]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[15]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[15]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[15]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[15]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[15]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 17: KVM Rx Extender ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[16]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[16]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[16]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[16]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[16]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[16]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[16]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[16]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[16]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[16]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[16]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[16]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[16]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[16]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 18: Main Power Unit (MPU) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc1ws06_array[17]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc1ws06_array[17]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc1ws06_array[17]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc1ws06_array[17]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc1ws06_array[17]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc1ws07_array[17]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc1ws07_array[17]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc1ws07_array[17]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc1ws07_array[17]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc1ws08_array[17]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc1ws08_array[17]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc1ws08_array[17]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc1ws08_array[17]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc1ws06_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws07_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc1ws08_array[17]['remarks']; ?></td>
                        </tr>
                    </div>
				</table>
			</div>
		</section>

        <!-- #################### WMFC 2 (Workstation) #################### -->
        <section>
			<div class="card card2" id="wmfc2">
				<table class="tableTitle">
					<tr>
						<td class="title"><h6>WMFC 2</h6></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

              		<!-- ~~~~~~~~~~~~~~ Row 1: EXO-C2  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: EXO-HMI  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: ESM SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[2]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[2]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[2]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[3]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[3]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[3]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[3]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: WMFCC 1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[4]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[4]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[4]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[4]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[4]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[4]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[4]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[4]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[4]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[4]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[4]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[4]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: Keyboard/Mouse Extender    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[5]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[5]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[5]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[5]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[5]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[5]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[5]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[5]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[5]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[5]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[5]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[5]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: WMFCC 3 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[6]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[6]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[6]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[6]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[6]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[6]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[6]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[6]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[6]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[6]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[6]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[6]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 8: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[7]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[7]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[7]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[7]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[7]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[7]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[7]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[7]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[7]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[7]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[7]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[7]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[7]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[7]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 9: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[8]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[8]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[8]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[8]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[8]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[8]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[8]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[8]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[8]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[8]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[8]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[8]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[8]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[8]['remarks']; ?></td>
                        </tr>
                    </div>

					<!-- ~~~~~~~~~~~~~~ Row 10: EXO-C2  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[9]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[9]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[9]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[9]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[9]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[9]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[9]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[9]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[9]['storob']; ?></td>
                            <td class="id id08"><?php echo$wmfc2ws08_arrayy[9]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[9]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[9]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[9]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[9]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 11: EXO-HMI  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[10]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[10]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[10]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[10]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[10]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[10]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[10]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[10]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[10]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[10]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[10]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[10]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[10]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[10]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 12: ESM SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[11]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[11]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[11]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[11]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[11]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[11]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[11]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[11]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[11]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[11]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[11]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[11]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[11]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[11]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 13: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[12]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[12]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[12]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[12]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[12]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[12]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[12]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[12]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[12]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[12]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[12]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[12]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[12]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[12]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 14: WMFCC 1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[13]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[13]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[13]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[13]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[13]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[13]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[13]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[13]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[13]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[13]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[13]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[13]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[13]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[13]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 15: Keyboard/Mouse Extender    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[14]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[14]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[14]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[14]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[14]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[14]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[14]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[14]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[14]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[14]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[14]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[14]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[14]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[14]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 16: WMFCC 3 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[15]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[15]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[15]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[15]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[15]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[15]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[15]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[15]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[15]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[15]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[15]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[15]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[15]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[15]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 17: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[16]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[16]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[16]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[16]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[16]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[16]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[16]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[16]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[16]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[16]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[16]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[16]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[16]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[16]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 18: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc2ws06_array[17]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc2ws06_array[17]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc2ws06_array[17]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc2ws06_array[17]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc2ws06_array[17]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc2ws07_array[17]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc2ws07_array[17]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc2ws07_array[17]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc2ws07_array[17]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc2ws08_array[17]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc2ws08_array[17]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc2ws08_array[17]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc2ws08_array[17]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc2ws06_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws07_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc2ws08_array[17]['remarks']; ?></td>
                        </tr>
                    </div>
				</table>
			</div>
		</section>
        
        <!-- #################### WMFC 3 (Workstation) #################### --> 
        <section>
			<div class="card card2" id="wmfc3">
				<table class="tableTitle">
					<tr>
						<td class="title"><h6>WMFC 3</h6></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

              		<!-- ~~~~~~~~~~~~~~ Row 1: EXO-C2  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: EXO-HMI  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: ESM SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[2]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[2]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[2]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[3]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[3]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[3]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[3]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: WMFCC 1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[4]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[4]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[4]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[4]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[4]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[4]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[4]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws07_array[4]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws07_array[4]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws07_array[4]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws07_array[4]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[4]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: Keyboard/Mouse Extender    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[5]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[5]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[5]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[5]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[5]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[5]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[5]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[5]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[5]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[5]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[5]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[5]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: WMFCC 3 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[6]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[6]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[6]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[6]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[6]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[6]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[6]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[6]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[6]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[6]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[6]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[6]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 8: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[7]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[7]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[7]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[7]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[7]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[7]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[7]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[7]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[7]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[7]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[7]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[7]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[7]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[7]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 9: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[8]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[8]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[8]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[8]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[8]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[8]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[8]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[8]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[8]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[8]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[8]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[8]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[8]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[8]['remarks']; ?></td>
                        </tr>
                    </div>

					<!-- ~~~~~~~~~~~~~~ Row 10: EXO-C2  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[9]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[9]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[9]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[9]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[9]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[9]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[9]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[9]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[9]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[9]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[9]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[9]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[9]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[9]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 11: EXO-HMI  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[10]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[10]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[10]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[10]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[10]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[10]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[10]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[10]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[10]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[10]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[10]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[10]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[10]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[10]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 12: ESM SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[11]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[11]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[11]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[11]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[11]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[11]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[11]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[11]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[11]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[11]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[11]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[11]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[11]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[11]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 13: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[12]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[12]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[12]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[12]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[12]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[12]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[12]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[12]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[12]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[12]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[12]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[12]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[12]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[12]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 14: WMFCC 1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[13]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[13]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[13]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[13]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[13]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[13]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[13]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[13]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[13]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[13]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[13]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[13]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[13]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[13]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 15: Keyboard/Mouse Extender    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[14]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[14]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[14]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[14]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[14]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[14]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[14]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[14]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[14]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[14]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[14]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[14]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[14]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[14]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 16: WMFCC 3 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[15]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[15]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[15]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[15]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[15]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[15]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[15]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[15]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[15]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[15]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[15]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[15]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[15]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[15]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 17: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[16]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[16]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[16]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[16]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[16]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[16]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[16]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[16]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[16]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[16]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[16]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[16]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[16]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[16]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 18: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc3ws06_array[17]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc3ws06_array[17]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc3ws06_array[17]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc3ws06_array[17]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc3ws06_array[17]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc3ws07_array[17]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc3ws07_array[17]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc3ws07_array[17]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc3ws07_array[17]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc3ws08_array[17]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc3ws08_array[17]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc3ws08_array[17]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc3ws08_array[17]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc3ws06_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws07_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc3ws08_array[17]['remarks']; ?></td>
                        </tr>
                    </div>
				</table>
			</div>
		</section> 

        <!-- #################### WMFC 4 (Workstation) #################### -->
        <section>
			<div class="card card2" id="wmfc4">
				<table class="tableTitle">
					<tr>
						<td class="title"><h6>WMFC 4</h6></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

              		<!-- ~~~~~~~~~~~~~~ Row 1: EXO-C2  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: EXO-HMI  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: ESM SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[2]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[2]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[2]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[3]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[3]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[3]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[3]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: WMFCC 1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[4]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[4]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[4]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[4]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[4]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[4]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[4]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[4]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[4]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[4]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[4]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[4]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[4]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: Keyboard/Mouse Extender    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[5]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[5]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[5]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[5]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[5]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[5]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[5]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[5]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[5]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[5]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[5]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[5]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[5]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: WMFCC 3 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[6]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[6]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[6]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[6]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[6]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[6]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[6]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[6]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[6]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[6]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[6]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[6]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[6]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 8: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[7]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[7]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[7]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[7]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[7]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[7]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[7]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[7]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[7]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[7]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[7]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[7]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[7]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[7]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[7]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 9: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[8]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[8]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[8]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[8]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[8]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[8]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[8]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[8]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[8]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[8]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[8]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[8]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[8]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[8]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[8]['remarks']; ?></td>
                        </tr>
                    </div>

					<!-- ~~~~~~~~~~~~~~ Row 10: EXO-C2  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[9]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[9]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[9]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[9]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[9]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[9]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[9]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[9]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[9]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[9]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[9]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[9]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[9]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[9]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[9]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 11: EXO-HMI  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[10]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[10]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[10]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[10]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[10]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[10]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[10]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[10]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[10]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[10]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[10]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[10]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[10]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[10]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[10]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 12: ESM SSIU ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[11]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[11]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[11]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[11]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[11]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[11]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[11]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[11]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[11]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[11]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[11]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[11]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[11]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[11]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[11]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 13: Video Switch ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[12]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[12]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[12]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[12]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[12]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[12]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[12]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[12]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[12]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[12]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[12]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[12]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[12]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[12]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[12]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 14: WMFCC 1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[13]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[13]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[13]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[13]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[13]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[13]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[13]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[13]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[13]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[13]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[13]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[13]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[13]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[13]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[13]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 15: Keyboard/Mouse Extender    ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[14]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[14]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[14]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[14]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[14]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[14]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[14]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[14]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[14]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[14]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[14]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[14]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[14]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[14]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[14]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 16: WMFCC 3 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[15]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[15]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[15]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[15]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[15]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[15]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[15]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[15]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[15]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[15]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[15]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[15]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[15]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[15]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[15]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 17: UPS ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[16]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[16]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[16]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[16]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[16]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[16]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[16]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[16]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[16]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[16]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[16]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[16]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[16]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[16]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[16]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 18: Main Power Unit ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $wmfc4ws06_array[17]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $wmfc4ws06_array[17]['name']; ?></td>
                            <td class="status status06"><?php echo $wmfc4ws06_array[17]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $wmfc4ws06_array[17]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $wmfc4ws06_array[17]['storob']; ?></td>
                            <td class="id id07"<?php echo $wmfc4ws07_array[17]['id']; ?>></td>
                            <td class="status status07"><?php echo $wmfc4ws07_array[17]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $wmfc4ws07_array[17]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $wmfc4ws07_array[17]['storob']; ?></td>
                            <td class="id id08"><?php echo $wmfc4ws08_array[17]['id']; ?></td>
                            <td class="status status08"><?php echo $wmfc4ws08_array[17]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $wmfc4ws08_array[17]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $wmfc4ws08_array[17]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $wmfc4ws06_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws07_array[17]['remarks']; ?></td>
                            <td colspan="3"><?php echo $wmfc4ws08_array[17]['remarks']; ?></td>
                        </tr>
                    </div>
				</table>
			</div>
		</section>
        
        <!-- #################### LSD System #################### -->
        <section>
			<div class="card card2" id="lsdSystem">
				<table class="tableTitle">
					<tr>
						<td class="title"><h4>LSD System</h4></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

              		<!-- ~~~~~~~~~~~~~~ Row 1: Large Screen Display (LSD)  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $lsdsystem06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $lsdsystem06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $lsdsystem06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $lsdsystem06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $lsdsystem06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $lsdsystem07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $lsdsystem07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $lsdsystem07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $lsdsystem07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $lsdsystem08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $lsdsystem08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $lsdsystem08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $lsdsystem08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $lsdsystem06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $lsdsystem07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $lsdsystem08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>
				</table>
			</div>
		</section>
        
        <!-- #################### Junction Box #################### --> 
        <section>
			<div class="card card2" id="junctionBox">
				<table class="tableTitle">
					<tr>
						<td class="title"><h6>Junction Box</h6></td>
						<td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
					</tr>
				</table>
			</div>
			
			<div class="card" id="card3">
				<table>
					<tr>
						<th class="componentName" rowspan="2">Component Name</th>
						<th colspan="3">KDB06</th>
						<th colspan="3">KDB07</th>
						<th colspan="3">KDB08</th>
					</tr>

					<tr>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
                        <th>Status</th>
						<th>Condition</th>
						<th>Storob</th>
					</tr>

              		<!-- ~~~~~~~~~~~~~~ Row 1: Power Supply Unit (PSU)  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $junctionboxlsdsystem06_array[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $junctionboxlsdsystem06_array[0]['name']; ?></td>
                            <td class="status status06"><?php echo $junctionboxlsdsystem06_array[0]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $junctionboxlsdsystem06_array[0]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $junctionboxlsdsystem06_array[0]['storob']; ?></td>
                            <td class="id id07"<?php echo $junctionboxlsdsystem07_array[0]['id']; ?>></td>
                            <td class="status status07"><?php echo $junctionboxlsdsystem07_array[0]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $junctionboxlsdsystem07_array[0]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $junctionboxlsdsystem07_array[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $junctionboxlsdsystem08_array[0]['id']; ?></td>
                            <td class="status status08"><?php echo $junctionboxlsdsystem08_array[0]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $junctionboxlsdsystem08_array[0]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $junctionboxlsdsystem08_array[0]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $junctionboxlsdsystem06_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem07_array[0]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem08_array[0]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: DVI to Fiber Rx (DVI)  ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $junctionboxlsdsystem06_array[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $junctionboxlsdsystem06_array[1]['name']; ?></td>
                            <td class="status status06"><?php echo $junctionboxlsdsystem06_array[1]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $junctionboxlsdsystem06_array[1]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $junctionboxlsdsystem06_array[1]['storob']; ?></td>
                            <td class="id id07"<?php echo $junctionboxlsdsystem07_array[1]['id']; ?>></td>
                            <td class="status status07"><?php echo $junctionboxlsdsystem07_array[1]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $junctionboxlsdsystem07_array[1]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $junctionboxlsdsystem07_array[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $junctionboxlsdsystem08_array[1]['id']; ?></td>
                            <td class="status status08"><?php echo $junctionboxlsdsystem08_array[1]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $junctionboxlsdsystem08_array[1]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $junctionboxlsdsystem08_array[1]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $junctionboxlsdsystem06_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem07_array[1]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem08_array[1]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: DVI to Fiber Rx (VGA) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $junctionboxlsdsystem06_array[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $junctionboxlsdsystem06_array[2]['name']; ?></td>
                            <td class="status status06"><?php echo $junctionboxlsdsystem06_array[2]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $junctionboxlsdsystem06_array[2]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $junctionboxlsdsystem06_array[2]['storob']; ?></td>
                            <td class="id id07"<?php echo $junctionboxlsdsystem07_array[2]['id']; ?>></td>
                            <td class="status status07"><?php echo $junctionboxlsdsystem07_array[2]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $junctionboxlsdsystem07_array[2]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $junctionboxlsdsystem07_array[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $junctionboxlsdsystem08_array[2]['id']; ?></td>
                            <td class="status status08"><?php echo $junctionboxlsdsystem08_array[2]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $junctionboxlsdsystem08_array[2]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $junctionboxlsdsystem08_array[2]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $junctionboxlsdsystem06_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem07_array[2]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem08_array[2]['remarks']; ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: DVI to VGA Converter ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $junctionboxlsdsystem06_array[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $junctionboxlsdsystem06_array[3]['name']; ?></td>
                            <td class="status status06"><?php echo $junctionboxlsdsystem06_array[3]['c_status']; ?></td>
                            <td class="condition condition06"><?php echo $junctionboxlsdsystem06_array[3]['c_condition']; ?></td>
                            <td class="storob06"><?php echo $junctionboxlsdsystem06_array[3]['storob']; ?></td>
                            <td class="id id07"<?php echo $junctionboxlsdsystem07_array[3]['id']; ?>></td>
                            <td class="status status07"><?php echo $junctionboxlsdsystem07_array[3]['c_status']; ?></td>
                            <td class="condition condition07"><?php echo $junctionboxlsdsystem07_array[3]['c_condition']; ?></td>
                            <td class="storob07"><?php echo $junctionboxlsdsystem07_array[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $junctionboxlsdsystem08_array[3]['id']; ?></td>
                            <td class="status status08"><?php echo $junctionboxlsdsystem08_array[3]['c_status']; ?></td>
                            <td class="condition condition08"><?php echo $junctionboxlsdsystem08_array[3]['c_condition']; ?></td>
                            <td class="storob08"><?php echo $junctionboxlsdsystem08_array[3]['storob']; ?></td>
                            <td rowspan="2" class="action"><button type="button" class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $junctionboxlsdsystem06_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem07_array[3]['remarks']; ?></td>
                            <td colspan="3"><?php echo $junctionboxlsdsystem08_array[3]['remarks']; ?></td>
                        </tr>
                    </div>
				</table>
			</div>
		</section>
    </body>

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