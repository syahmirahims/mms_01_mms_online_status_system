<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Radio Home Page</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../01_stylesheets/06_radio_page/table/01_style_table_all.css">
        <link rel="stylesheet" href="../../01_stylesheets/06_radio_page/01_style_home_page.css">

        <!-- JS CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>

    <body>
        <?php require "../../00_function_scripts/overall_status/radio/01_radio_display.php"; ?>

        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../../overall_status/home.php"><i class="fas fa-database" id="current"></i></a> <br><br>
            <a href="../../ships/home.php"><i class="fas fa-ship"></i></a> <br><br>
            <a href="../../storob/home.php"><i class="fas fa-exchange-alt"></i></a> <br><br>
            <a href="../../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">RADIO STATUS</h2>
        </div>

        <!-- #################### Menu #################### -->

        <!-- #################### PV80 #################### -->
        <section>
            <div class="card card2" id="antenna">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h4>PV80</h4></td>
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
                        <th colspan="3">KDB09</th>
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
                        <th>Status</th>
                        <th>Condition</th>
                        <th>Storob</th>
                    </tr>

                    <!-- ~~~~~~~~~~~~~~ Row 1: UHF1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $array06[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array06[0]['radio_name']; ?></td>
                            <td class="status status06"><?php echo $array06[0]['r_status']; ?></td>
                            <td class="condition condition06"><?php echo $array06[0]['r_condition']; ?></td>
                            <td class="storob06"><?php echo $array06[0]['storob']; ?></td>
                            <td class="id id07"><?php echo $array07[0]['id']; ?></td>
                            <td class="status status07"><?php echo $array07[0]['r_status']; ?></td>
                            <td class="condition condition07"><?php echo $array07[0]['r_condition']; ?></td>
                            <td class="storob07"><?php echo $array07[0]['storob']; ?></td>
                            <td class="id id08"><?php echo $array08[0]['id']; ?></td>
                            <td class="status status08"><?php echo $array08[0]['r_status']; ?></td>
                            <td class="condition condition08"><?php echo $array08[0]['r_condition']; ?></td>
                            <td class="storob08"><?php echo $array08[0]['storob']; ?></td>
                            <td class="id id09"><?php echo $array09[0]['id']; ?></td>
                            <td class="status status09"><?php echo $array09[0]['r_status']; ?></td>
                            <td class="condition condition09"><?php echo $array09[0]['r_condition']; ?></td>
                            <td class="storob09"><?php echo $array09[0]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array06[0]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array07[0]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array08[0]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array09[0]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: UHF2 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $array06[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array06[1]['radio_name']; ?></td>
                            <td class="status status06"><?php echo $array06[1]['r_status']; ?></td>
                            <td class="condition condition06"><?php echo $array06[1]['r_condition']; ?></td>
                            <td class="storob06"><?php echo $array06[1]['storob']; ?></td>
                            <td class="id id07"><?php echo $array07[1]['id']; ?></td>
                            <td class="status status07"><?php echo $array07[1]['r_status']; ?></td>
                            <td class="condition condition07"><?php echo $array07[1]['r_condition']; ?></td>
                            <td class="storob07"><?php echo $array07[1]['storob']; ?></td>
                            <td class="id id08"><?php echo $array08[1]['id']; ?></td>
                            <td class="status status08"><?php echo $array08[1]['r_status']; ?></td>
                            <td class="condition condition08"><?php echo $array08[1]['r_condition']; ?></td>
                            <td class="storob08"><?php echo $array08[1]['storob']; ?></td>
                            <td class="id id09"><?php echo $array09[1]['id']; ?></td>
                            <td class="status status09"><?php echo $array09[1]['r_status']; ?></td>
                            <td class="condition condition09"><?php echo $array09[1]['r_condition']; ?></td>
                            <td class="storob09"><?php echo $array09[1]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array06[1]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array07[1]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array08[1]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array09[1]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: UHF3 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $array06[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array06[2]['radio_name']; ?></td>
                            <td class="status status06"><?php echo $array06[2]['r_status']; ?></td>
                            <td class="condition condition06"><?php echo $array06[2]['r_condition']; ?></td>
                            <td class="storob06"><?php echo $array06[2]['storob']; ?></td>
                            <td class="id id07"><?php echo $array07[2]['id']; ?></td>
                            <td class="status status07"><?php echo $array07[2]['r_status']; ?></td>
                            <td class="condition condition07"><?php echo $array07[2]['r_condition']; ?></td>
                            <td class="storob07"><?php echo $array07[2]['storob']; ?></td>
                            <td class="id id08"><?php echo $array08[2]['id']; ?></td>
                            <td class="status status08"><?php echo $array08[2]['r_status']; ?></td>
                            <td class="condition condition08"><?php echo $array08[2]['r_condition']; ?></td>
                            <td class="storob08"><?php echo $array08[2]['storob']; ?></td>
                            <td class="id id09"><?php echo $array09[2]['id']; ?></td>
                            <td class="status status09"><?php echo $array09[2]['r_status']; ?></td>
                            <td class="condition condition09"><?php echo $array09[2]['r_condition']; ?></td>
                            <td class="storob09"><?php echo $array09[2]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array06[2]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array07[2]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array08[2]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array09[2]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: UHF4 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $array06[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array06[3]['radio_name']; ?></td>
                            <td class="status status06"><?php echo $array06[3]['r_status']; ?></td>
                            <td class="condition condition06"><?php echo $array06[3]['r_condition']; ?></td>
                            <td class="storob06"><?php echo $array06[3]['storob']; ?></td>
                            <td class="id id07"><?php echo $array07[3]['id']; ?></td>
                            <td class="status status07"><?php echo $array07[3]['r_status']; ?></td>
                            <td class="condition condition07"><?php echo $array07[3]['r_condition']; ?></td>
                            <td class="storob07"><?php echo $array07[3]['storob']; ?></td>
                            <td class="id id08"><?php echo $array08[3]['id']; ?></td>
                            <td class="status status08"><?php echo $array08[3]['r_status']; ?></td>
                            <td class="condition condition08"><?php echo $array08[3]['r_condition']; ?></td>
                            <td class="storob08"><?php echo $array08[3]['storob']; ?></td>
                            <td class="id id09"><?php echo $array09[3]['id']; ?></td>
                            <td class="status status09"><?php echo $array09[3]['r_status']; ?></td>
                            <td class="condition condition09"><?php echo $array09[3]['r_condition']; ?></td>
                            <td class="storob09"><?php echo $array09[3]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array06[3]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array07[3]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array08[3]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array09[3]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: HF1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $array06[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array06[4]['radio_name']; ?></td>
                            <td class="status status06"><?php echo $array06[4]['r_status']; ?></td>
                            <td class="condition condition06"><?php echo $array06[4]['r_condition']; ?></td>
                            <td class="storob06"><?php echo $array06[4]['storob']; ?></td>
                            <td class="id id07"><?php echo $array07[4]['id']; ?></td>
                            <td class="status status07"><?php echo $array07[4]['r_status']; ?></td>
                            <td class="condition condition07"><?php echo $array07[4]['r_condition']; ?></td>
                            <td class="storob07"><?php echo $array07[4]['storob']; ?></td>
                            <td class="id id08"><?php echo $array08[4]['id']; ?></td>
                            <td class="status status08"><?php echo $array08[4]['r_status']; ?></td>
                            <td class="condition condition08"><?php echo $array08[4]['r_condition']; ?></td>
                            <td class="storob08"><?php echo $array08[4]['storob']; ?></td>
                            <td class="id id09"><?php echo $array09[4]['id']; ?></td>
                            <td class="status status09"><?php echo $array09[4]['r_status']; ?></td>
                            <td class="condition condition09"><?php echo $array09[4]['r_condition']; ?></td>
                            <td class="storob09"><?php echo $array09[4]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array06[4]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array07[4]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array08[4]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array09[4]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: HF2 (Harris, Loop) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $array06[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array06[5]['radio_name']; ?></td>
                            <td class="status status06"><?php echo $array06[5]['r_status']; ?></td>
                            <td class="condition condition06"><?php echo $array06[5]['r_condition']; ?></td>
                            <td class="storob06"><?php echo $array06[5]['storob']; ?></td>
                            <td class="id id07"><?php echo $array07[5]['id']; ?></td>
                            <td class="status status07"><?php echo $array07[5]['r_status']; ?></td>
                            <td class="condition condition07"><?php echo $array07[5]['r_condition']; ?></td>
                            <td class="storob07"><?php echo $array07[5]['storob']; ?></td>
                            <td class="id id08"><?php echo $array08[5]['id']; ?></td>
                            <td class="status status08"><?php echo $array08[5]['r_status']; ?></td>
                            <td class="condition condition08"><?php echo $array08[5]['r_condition']; ?></td>
                            <td class="storob08"><?php echo $array08[5]['storob']; ?></td>
                            <td class="id id09"><?php echo $array09[5]['id']; ?></td>
                            <td class="status status09"><?php echo $array09[5]['r_status']; ?></td>
                            <td class="condition condition09"><?php echo $array09[5]['r_condition']; ?></td>
                            <td class="storob09"><?php echo $array09[5]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array06[5]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array07[5]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array08[5]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array09[5]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: HF3 (Harris, 400W) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id06"><?php echo $array06[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array06[6]['radio_name']; ?></td>
                            <td class="status status06"><?php echo $array06[6]['r_status']; ?></td>
                            <td class="condition condition06"><?php echo $array06[6]['r_condition']; ?></td>
                            <td class="storob06"><?php echo $array06[6]['storob']; ?></td>
                            <td class="id id07"><?php echo $array07[6]['id']; ?></td>
                            <td class="status status07"><?php echo $array07[6]['r_status']; ?></td>
                            <td class="condition condition07"><?php echo $array07[6]['r_condition']; ?></td>
                            <td class="storob07"><?php echo $array07[6]['storob']; ?></td>
                            <td class="id id08"><?php echo $array08[6]['id']; ?></td>
                            <td class="status status08"><?php echo $array08[6]['r_status']; ?></td>
                            <td class="condition condition08"><?php echo $array08[6]['r_condition']; ?></td>
                            <td class="storob08"><?php echo $array08[6]['storob']; ?></td>
                            <td class="id id09"><?php echo $array09[6]['id']; ?></td>
                            <td class="status status09"><?php echo $array09[6]['r_status']; ?></td>
                            <td class="condition condition09"><?php echo $array09[6]['r_condition']; ?></td>
                            <td class="storob09"><?php echo $array09[6]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array06[6]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array07[6]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array08[6]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array09[6]['remarks'] ?></td>
                        </tr>
                    </div>
                </table>
            </div>
        </section>

        <!-- #################### FPB41 #################### -->
        <section>
            <div class="card card2" id="antenna">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h4>FPB41</h4></td>
                        <td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
                    </tr>
                </table>
            </div>

            <div class="card" id="card3">
                <table>
                    <tr>
                        <th class="componentName" rowspan="2">Component Name</th>
                        <th colspan="3">KDB17</th>
                        <th colspan="3">KDB18</th>
                        <th colspan="3">KDB19</th>
                        <th colspan="3">KDB20</th>
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
                        <th>Status</th>
                        <th>Condition</th>
                        <th>Storob</th>
                    </tr>

                    <!-- ~~~~~~~~~~~~~~ Row 1: UHF1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id17"><?php echo $array17[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array17[0]['radio_name']; ?></td>
                            <td class="status status17"><?php echo $array17[0]['r_status']; ?></td>
                            <td class="condition condition17"><?php echo $array17[0]['r_condition']; ?></td>
                            <td class="storob17"><?php echo $array17[0]['storob']; ?></td>
                            <td class="id id18"><?php echo $array18[0]['id']; ?></td>
                            <td class="status status18"><?php echo $array18[0]['r_status']; ?></td>
                            <td class="condition condition18"><?php echo $array18[0]['r_condition']; ?></td>
                            <td class="storob18"><?php echo $array18[0]['storob']; ?></td>
                            <td class="id id19"><?php echo $array19[0]['id']; ?></td>
                            <td class="status status19"><?php echo $array19[0]['r_status']; ?></td>
                            <td class="condition condition19"><?php echo $array19[0]['r_condition']; ?></td>
                            <td class="storob19"><?php echo $array19[0]['storob']; ?></td>
                            <td class="id id20"><?php echo $array20[0]['id']; ?></td>
                            <td class="status status20"><?php echo $array20[0]['r_status']; ?></td>
                            <td class="condition condition20"><?php echo $array20[0]['r_condition']; ?></td>
                            <td class="storob20"><?php echo $array20[0]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array17[0]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array18[0]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array19[0]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array20[0]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: UHF2 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id17"><?php echo $array17[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array17[1]['radio_name']; ?></td>
                            <td class="status status17"><?php echo $array17[1]['r_status']; ?></td>
                            <td class="condition condition17"><?php echo $array17[1]['r_condition']; ?></td>
                            <td class="storob17"><?php echo $array17[1]['storob']; ?></td>
                            <td class="id id18"><?php echo $array18[1]['id']; ?></td>
                            <td class="status status18"><?php echo $array18[1]['r_status']; ?></td>
                            <td class="condition condition18"><?php echo $array18[1]['r_condition']; ?></td>
                            <td class="storob18"><?php echo $array18[1]['storob']; ?></td>
                            <td class="id id19"><?php echo $array19[1]['id']; ?></td>
                            <td class="status status19"><?php echo $array19[1]['r_status']; ?></td>
                            <td class="condition condition19"><?php echo $array19[1]['r_condition']; ?></td>
                            <td class="storob19"><?php echo $array19[1]['storob']; ?></td>
                            <td class="id id20"><?php echo $array20[1]['id']; ?></td>
                            <td class="status status20"><?php echo $array20[1]['r_status']; ?></td>
                            <td class="condition condition20"><?php echo $array20[1]['r_condition']; ?></td>
                            <td class="storob20"><?php echo $array20[1]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array17[1]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array18[1]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array19[1]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array20[1]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: UHF3 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id17"><?php echo $array17[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array17[2]['radio_name']; ?></td>
                            <td class="status status17"><?php echo $array17[2]['r_status']; ?></td>
                            <td class="condition condition17"><?php echo $array17[2]['r_condition']; ?></td>
                            <td class="storob17"><?php echo $array17[2]['storob']; ?></td>
                            <td class="id id18"><?php echo $array18[2]['id']; ?></td>
                            <td class="status status18"><?php echo $array18[2]['r_status']; ?></td>
                            <td class="condition condition18"><?php echo $array18[2]['r_condition']; ?></td>
                            <td class="storob18"><?php echo $array18[2]['storob']; ?></td>
                            <td class="id id19"><?php echo $array19[2]['id']; ?></td>
                            <td class="status status19"><?php echo $array19[2]['r_status']; ?></td>
                            <td class="condition condition19"><?php echo $array19[2]['r_condition']; ?></td>
                            <td class="storob19"><?php echo $array19[2]['storob']; ?></td>
                            <td class="id id20"><?php echo $array20[2]['id']; ?></td>
                            <td class="status status20"><?php echo $array20[2]['r_status']; ?></td>
                            <td class="condition condition20"><?php echo $array20[2]['r_condition']; ?></td>
                            <td class="storob20"><?php echo $array20[2]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array17[2]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array18[2]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array19[2]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array20[2]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: UHF4 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id17"><?php echo $array17[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array17[3]['radio_name']; ?></td>
                            <td class="status status17"><?php echo $array17[3]['r_status']; ?></td>
                            <td class="condition condition17"><?php echo $array17[3]['r_condition']; ?></td>
                            <td class="storob17"><?php echo $array17[3]['storob']; ?></td>
                            <td class="id id18"><?php echo $array18[3]['id']; ?></td>
                            <td class="status status18"><?php echo $array18[3]['r_status']; ?></td>
                            <td class="condition condition18"><?php echo $array18[3]['r_condition']; ?></td>
                            <td class="storob18"><?php echo $array18[3]['storob']; ?></td>
                            <td class="id id19"><?php echo $array19[3]['id']; ?></td>
                            <td class="status status19"><?php echo $array19[3]['r_status']; ?></td>
                            <td class="condition condition19"><?php echo $array19[3]['r_condition']; ?></td>
                            <td class="storob19"><?php echo $array19[3]['storob']; ?></td>
                            <td class="id id20"><?php echo $array20[3]['id']; ?></td>
                            <td class="status status20"><?php echo $array20[3]['r_status']; ?></td>
                            <td class="condition condition20"><?php echo $array20[3]['r_condition']; ?></td>
                            <td class="storob20"><?php echo $array20[3]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array17[3]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array18[3]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array19[3]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array20[3]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: HF1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id17"><?php echo $array17[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array17[4]['radio_name']; ?></td>
                            <td class="status status17"><?php echo $array17[4]['r_status']; ?></td>
                            <td class="condition condition17"><?php echo $array17[4]['r_condition']; ?></td>
                            <td class="storob17"><?php echo $array17[4]['storob']; ?></td>
                            <td class="id id18"><?php echo $array18[4]['id']; ?></td>
                            <td class="status status18"><?php echo $array18[4]['r_status']; ?></td>
                            <td class="condition condition18"><?php echo $array18[4]['r_condition']; ?></td>
                            <td class="storob18"><?php echo $array18[4]['storob']; ?></td>
                            <td class="id id19"><?php echo $array19[4]['id']; ?></td>
                            <td class="status status19"><?php echo $array19[4]['r_status']; ?></td>
                            <td class="condition condition19"><?php echo $array19[4]['r_condition']; ?></td>
                            <td class="storob19"><?php echo $array19[4]['storob']; ?></td>
                            <td class="id id20"><?php echo $array20[4]['id']; ?></td>
                            <td class="status status20"><?php echo $array20[4]['r_status']; ?></td>
                            <td class="condition condition20"><?php echo $array20[4]['r_condition']; ?></td>
                            <td class="storob20"><?php echo $array20[4]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array17[4]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array18[4]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array19[4]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array20[4]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: HF2 (Harris, Loop) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id17"><?php echo $array17[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array17[5]['radio_name']; ?></td>
                            <td class="status status17"><?php echo $array17[5]['r_status']; ?></td>
                            <td class="condition condition17"><?php echo $array17[5]['r_condition']; ?></td>
                            <td class="storob17"><?php echo $array17[5]['storob']; ?></td>
                            <td class="id id18"><?php echo $array18[5]['id']; ?></td>
                            <td class="status status18"><?php echo $array18[5]['r_status']; ?></td>
                            <td class="condition condition18"><?php echo $array18[5]['r_condition']; ?></td>
                            <td class="storob18"><?php echo $array18[5]['storob']; ?></td>
                            <td class="id id19"><?php echo $array19[5]['id']; ?></td>
                            <td class="status status19"><?php echo $array19[5]['r_status']; ?></td>
                            <td class="condition condition19"><?php echo $array19[5]['r_condition']; ?></td>
                            <td class="storob19"><?php echo $array19[5]['storob']; ?></td>
                            <td class="id id20"><?php echo $array20[5]['id']; ?></td>
                            <td class="status status20"><?php echo $array20[5]['r_status']; ?></td>
                            <td class="condition condition20"><?php echo $array20[5]['r_condition']; ?></td>
                            <td class="storob20"><?php echo $array20[5]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array17[5]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array18[5]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array19[5]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array20[5]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: HF3 (Harris, 400W) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id17"><?php echo $array17[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array17[6]['radio_name']; ?></td>
                            <td class="status status17"><?php echo $array17[6]['r_status']; ?></td>
                            <td class="condition condition17"><?php echo $array17[6]['r_condition']; ?></td>
                            <td class="storob17"><?php echo $array17[6]['storob']; ?></td>
                            <td class="id id18"><?php echo $array18[6]['id']; ?></td>
                            <td class="status status18"><?php echo $array18[6]['r_status']; ?></td>
                            <td class="condition condition18"><?php echo $array18[6]['r_condition']; ?></td>
                            <td class="storob18"><?php echo $array18[6]['storob']; ?></td>
                            <td class="id id19"><?php echo $array19[6]['id']; ?></td>
                            <td class="status status19"><?php echo $array19[6]['r_status']; ?></td>
                            <td class="condition condition19"><?php echo $array19[6]['r_condition']; ?></td>
                            <td class="storob19"><?php echo $array19[6]['storob']; ?></td>
                            <td class="id id20"><?php echo $array20[6]['id']; ?></td>
                            <td class="status status20"><?php echo $array20[6]['r_status']; ?></td>
                            <td class="condition condition20"><?php echo $array20[6]['r_condition']; ?></td>
                            <td class="storob20"><?php echo $array20[6]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array17[6]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array18[6]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array19[6]['remarks'] ?></td>
                            <td colspan="3"><?php echo $array20[6]['remarks'] ?></td>
                        </tr>
                    </div>
                </table>
            </div>
        </section>

        <!-- #################### FIB25 & NOC ##################3# -->
        <section>
            <div class="card card4" id="utilityRack">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h4>FIB25 & NOC</h4></td>
                        <td class="back2Top">[<a href="#menu">Jump to Top</a>]</td>
                    </tr>
                </table>
            </div>
            
            <div class="card" id="card5">
                <table>
                    <tr>
                        <th class="componentName" rowspan="2">Component Name</th>
                        <th colspan="3">KDB21</th>
                        <th colspan="3">NOC</th>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <th>Condition</th>
                        <th>Storob</th>
                        <th>Status</th>
                        <th>Condition</th>
                        <th>Storob</th>
                    </tr>

                    <!-- ~~~~~~~~~~~~~~ Row 1: UHF1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id21"><?php echo $array21[0]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array21[0]['radio_name']; ?></td>
                            <td class="status status21"><?php echo $array21[0]['r_status']; ?></td>
                            <td class="condition condition21"><?php echo $array21[0]['r_condition']; ?></td>
                            <td class="storob21"><?php echo $array21[0]['storob']; ?></td>
                            <td class="id idNOC"><?php echo $arrayNOC[0]['id']; ?></td>
                            <td class="status statusNOC"><?php echo $arrayNOC[0]['r_status']; ?></td>
                            <td class="condition conditionNOC"><?php echo $arrayNOC[0]['r_condition']; ?></td>
                            <td class="storobNOC"><?php echo $arrayNOC[0]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array21[0]['remarks'] ?></td>
                            <td colspan="3"><?php echo $arrayNOC[0]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 2: UHF2 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id21"><?php echo $array21[1]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array21[1]['radio_name']; ?></td>
                            <td class="status status21"><?php echo $array21[1]['r_status']; ?></td>
                            <td class="condition condition21"><?php echo $array21[1]['r_condition']; ?></td>
                            <td class="storob21"><?php echo $array21[1]['storob']; ?></td>
                            <td class="id idNOC"><?php echo $arrayNOC[1]['id']; ?></td>
                            <td class="status statusNOC"><?php echo $arrayNOC[1]['r_status']; ?></td>
                            <td class="condition conditionNOC"><?php echo $arrayNOC[1]['r_condition']; ?></td>
                            <td class="storobNOC"><?php echo $arrayNOC[1]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array21[1]['remarks'] ?></td>
                            <td colspan="3"><?php echo $arrayNOC[1]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 3: UHF3 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id21"><?php echo $array21[2]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array21[2]['radio_name']; ?></td>
                            <td class="status status21"><?php echo $array21[2]['r_status']; ?></td>
                            <td class="condition condition21"><?php echo $array21[2]['r_condition']; ?></td>
                            <td class="storob21"><?php echo $array21[2]['storob']; ?></td>
                            <td class="id idNOC"><?php echo $arrayNOC[2]['id']; ?></td>
                            <td class="status statusNOC"><?php echo $arrayNOC[2]['r_status']; ?></td>
                            <td class="condition conditionNOC"><?php echo $arrayNOC[2]['r_condition']; ?></td>
                            <td class="storobNOC"><?php echo $arrayNOC[2]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array21[2]['remarks'] ?></td>
                            <td colspan="3"><?php echo $arrayNOC[2]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 4: UHF4 (Harris) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id21"><?php echo $array21[3]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array21[3]['radio_name']; ?></td>
                            <td class="status status21"><?php echo $array21[3]['r_status']; ?></td>
                            <td class="condition condition21"><?php echo $array21[3]['r_condition']; ?></td>
                            <td class="storob21"><?php echo $array21[3]['storob']; ?></td>
                            <td class="id idNOC"><?php echo $arrayNOC[3]['id']; ?></td>
                            <td class="status statusNOC"><?php echo $arrayNOC[3]['r_status']; ?></td>
                            <td class="condition conditionNOC"><?php echo $arrayNOC[3]['r_condition']; ?></td>
                            <td class="storobNOC"><?php echo $arrayNOC[3]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array21[3]['remarks'] ?></td>
                            <td colspan="3"><?php echo $arrayNOC[3]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 5: HF1 ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id21"><?php echo $array21[4]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array21[4]['radio_name']; ?></td>
                            <td class="status status21"><?php echo $array21[4]['r_status']; ?></td>
                            <td class="condition condition21"><?php echo $array21[4]['r_condition']; ?></td>
                            <td class="storob21"><?php echo $array21[4]['storob']; ?></td>
                            <td class="id idNOC"><?php echo $arrayNOC[4]['id']; ?></td>
                            <td class="status statusNOC"><?php echo $arrayNOC[4]['r_status']; ?></td>
                            <td class="condition conditionNOC"><?php echo $arrayNOC[4]['r_condition']; ?></td>
                            <td class="storobNOC"><?php echo $arrayNOC[4]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array21[4]['remarks'] ?></td>
                            <td colspan="3"><?php echo $arrayNOC[4]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 6: HF2 (Harris, Loop) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id21"><?php echo $array21[5]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array21[5]['radio_name']; ?></td>
                            <td class="status status21"><?php echo $array21[5]['r_status']; ?></td>
                            <td class="condition condition21"><?php echo $array21[5]['r_condition']; ?></td>
                            <td class="storob21"><?php echo $array21[5]['storob']; ?></td>
                            <td class="id idNOC"><?php echo $arrayNOC[5]['id']; ?></td>
                            <td class="status statusNOC"><?php echo $arrayNOC[5]['r_status']; ?></td>
                            <td class="condition conditionNOC"><?php echo $arrayNOC[5]['r_condition']; ?></td>
                            <td class="storobNOC"><?php echo $arrayNOC[5]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array21[5]['remarks'] ?></td>
                            <td colspan="3"><?php echo $arrayNOC[5]['remarks'] ?></td>
                        </tr>
                    </div>

                    <!-- ~~~~~~~~~~~~~~ Row 7: HF3 (Harris, 400W) ~~~~~~~~~~~~~~ -->
                    <div>
                        <tr>
                            <td class="id id21"><?php echo $array21[6]['id']; ?></td>
                            <td rowspan="2" class="componentName"><?php echo $array21[6]['radio_name']; ?></td>
                            <td class="status status21"><?php echo $array21[6]['r_status']; ?></td>
                            <td class="condition condition21"><?php echo $array21[6]['r_condition']; ?></td>
                            <td class="storob21"><?php echo $array21[6]['storob']; ?></td>
                            <td class="id idNOC"><?php echo $arrayNOC[6]['id']; ?></td>
                            <td class="status statusNOC"><?php echo $arrayNOC[6]['r_status']; ?></td>
                            <td class="condition conditionNOC"><?php echo $arrayNOC[6]['r_condition']; ?></td>
                            <td class="storobNOC"><?php echo $arrayNOC[6]['storob']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><?php echo $array21[6]['remarks'] ?></td>
                            <td colspan="3"><?php echo $arrayNOC[6]['remarks'] ?></td>
                        </tr>
                    </div>

                </table>
            </div>
        </section>

        <!-- ####################################################################### -->
        <!-- #################### Cell Colour Automation Script #################### -->
        <!-- ####################################################################### -->
        <section>
            <!-- Cell Colour Automation Script -->

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