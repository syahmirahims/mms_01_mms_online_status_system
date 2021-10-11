<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scanter Home Page</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../01_stylesheets/07_scanter_page/01_style_home_page.css">
        <link rel="stylesheet" href="../../01_stylesheets/07_scanter_page/table/01_style_table_pv80.css">

        <!-- JS CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>

    <body>
        <?php require "../../00_function_scripts/overall_status/scanter/01_scanter.php"; ?>
        
        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../../overall_status/home.php"><i class="fas fa-database" id="current"></i></a> <br><br>
            <a href="../../ships/home.php"><i class="fas fa-ship"></i></a> <br><br>
            <a href="../../storob/home.php"><i class="fas fa-exchange-alt"></i></a> <br><br>
            <a href="../../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">PV80 SCANTER STATUS</h2>
        </div>

        <!-- #################### Menu #################### -->

        <!-- #################### Antenna #################### -->
		<section>
			<div class="card card2" id="antenna">
				<table class="tableTitle">
					<tr>
						<td class="title"><h4>Antenna</h4></td>
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

					<!-- ~~~~~~~~~~~~~~ Row 1: Antenna Control Unit ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[0]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[0]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[0]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[0]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[0]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[0]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[0]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[0]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[0]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[0]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[0]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[0]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[0]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[0]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[0]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[0]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[0]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[0]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 2: Stabilized Antenna Platform ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[1]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[1]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[1]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[1]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[1]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[1]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[1]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[1]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[1]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[1]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[1]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[1]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[1]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[1]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[1]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[1]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[1]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[1]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 3: Servo Amplifier ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[2]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[2]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[2]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[2]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[2]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[2]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[2]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[2]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[2]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[2]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[2]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[2]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[2]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[2]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[2]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[2]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[2]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[2]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 4: Turning Unit (Motor) ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[3]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[3]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[3]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[3]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[3]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[3]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[3]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[3]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[3]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[3]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[3]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[3]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[3]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[3]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[3]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[3]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[3]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[3]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 5: Rotary Joint ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[4]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[4]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[4]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[4]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[4]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[4]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[4]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[4]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[4]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[4]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[4]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[4]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[4]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[4]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[4]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[4]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[4]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[4]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 6: Vertical Reference Unit ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[5]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[5]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[5]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[5]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[5]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[5]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[5]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[5]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[5]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[5]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[5]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[5]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[5]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[5]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[5]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[5]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[5]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[5]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 7: Waveguide ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[6]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[6]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[6]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[6]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[6]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[6]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[6]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[6]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[6]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[6]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[6]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[6]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[6]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[6]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[6]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[6]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[6]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[6]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 8: Waveguide Filter ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[7]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[7]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[7]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[7]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[7]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[7]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[7]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[7]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[7]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[7]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[7]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[7]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[7]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[7]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[7]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[7]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[7]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[7]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 9: Waveguide Circulator ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[8]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[8]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[8]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[8]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[8]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[8]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[8]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[8]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[8]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[8]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[8]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[8]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[8]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[8]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[8]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[8]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[8]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[8]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[8]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[8]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[8]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 10: Flange ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $antenna06_array[9]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $antenna06_array[9]['name']; ?></td>
							<td class="status status06"><?php echo $antenna06_array[9]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $antenna06_array[9]['c_condition']; ?></td>
							<td class="storob06"><?php echo $antenna06_array[9]['storob']; ?></td>
							<td class="id id07"><?php echo $antenna07_array[9]['id']; ?></td>
							<td class="status status07"><?php echo $antenna07_array[9]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $antenna07_array[9]['c_condition']; ?></td>
							<td class="storob07"><?php echo $antenna07_array[9]['storob']; ?></td>
							<td class="id id08"><?php echo $antenna08_array[9]['id']; ?></td>
							<td class="status status08"><?php echo $antenna08_array[9]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $antenna08_array[9]['c_condition']; ?></td>
							<td class="storob08"><?php echo $antenna08_array[9]['storob']; ?></td>
							<td class="id id09"><?php echo $antenna09_array[9]['id']; ?></td>
							<td class="status status09"><?php echo $antenna09_array[9]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $antenna09_array[9]['c_condition']; ?></td>
							<td class="storob09"><?php echo $antenna09_array[9]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $antenna06_array[9]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna07_array[9]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna08_array[9]['remarks']; ?></td>
							<td colspan="3"><?php echo $antenna09_array[9]['remarks']; ?></td>
						</tr>
					</div>

				</table>
			</div>
		</section>

        <!-- #################### Transceiver #################### -->
		<section>
			<div class="card card2" id="transceiver">
				<table class="tableTitle">
					<tr>
						<td class="title"><h4>Transceiver</h4></td>
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

					<!-- ~~~~~~~~~~~~~~ Row 1: Fan Assembly ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[0]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[0]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[0]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[0]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[0]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[0]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[0]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[0]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[0]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[0]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[0]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[0]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[0]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[0]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[0]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[0]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[0]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[0]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 2: RXTX Unit ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[1]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[1]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[1]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[1]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[1]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[1]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[1]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[1]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[1]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[1]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[1]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[1]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[1]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[1]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[1]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[1]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[1]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[1]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 3: Diplexer ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[2]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[2]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[2]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[2]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[2]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[2]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[2]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[2]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[2]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[2]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[2]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[2]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[2]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[2]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[2]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[2]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[2]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[2]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 4: TWT Amplifier ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[3]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[3]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[3]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[3]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[3]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[3]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[3]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[3]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[3]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[3]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[3]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[3]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[3]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[3]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[3]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[3]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[3]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[3]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 5: TWT Power Supply ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[4]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[4]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[4]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[4]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[4]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[4]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[4]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[4]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[4]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[4]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[4]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[4]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[4]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[4]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[4]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[4]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[4]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[4]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 6: Common Platform Board (Processing Crate) ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[5]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[5]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[5]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[5]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[5]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[5]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[5]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[5]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[5]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[5]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[5]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[5]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[5]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[5]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[5]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[5]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[5]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[5]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 7: CMM Module PCB ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[6]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[6]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[6]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[6]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[6]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[6]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[6]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[6]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[6]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[6]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[6]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[6]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[6]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[6]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[6]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[6]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[6]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[6]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 8: Internal LAN Switch ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[7]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[7]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[7]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[7]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[7]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[7]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[7]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[7]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[7]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[7]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[7]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[7]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[7]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[7]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[7]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[7]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[7]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[7]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 9: I/O Management Unit ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $transceiver06_array[8]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $transceiver06_array[8]['name']; ?></td>
							<td class="status status06"><?php echo $transceiver06_array[8]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $transceiver06_array[8]['c_condition']; ?></td>
							<td class="storob06"><?php echo $transceiver06_array[8]['storob']; ?></td>
							<td class="id id07"><?php echo $transceiver07_array[8]['id']; ?></td>
							<td class="status status07"><?php echo $transceiver07_array[8]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $transceiver07_array[8]['c_condition']; ?></td>
							<td class="storob07"><?php echo $transceiver07_array[8]['storob']; ?></td>
							<td class="id id08"><?php echo $transceiver08_array[8]['id']; ?></td>
							<td class="status status08"><?php echo $transceiver08_array[8]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $transceiver08_array[8]['c_condition']; ?></td>
							<td class="storob08"><?php echo $transceiver08_array[8]['storob']; ?></td>
							<td class="id id09"><?php echo $transceiver09_array[8]['id']; ?></td>
							<td class="status status09"><?php echo $transceiver09_array[8]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $transceiver09_array[8]['c_condition']; ?></td>
							<td class="storob09"><?php echo $transceiver09_array[8]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $transceiver06_array[8]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver07_array[8]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver08_array[8]['remarks']; ?></td>
							<td colspan="3"><?php echo $transceiver09_array[8]['remarks']; ?></td>
						</tr>
					</div>

				</table>
			</div>
		</section>

        <!-- #################### Utility Rack #################### -->
		<section>
			<div class="card card2" id="utilityRack">
				<table class="tableTitle">
					<tr>
						<td class="title"><h4>Utility Rack</h4></td>
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

					<!-- ~~~~~~~~~~~~~~ Row 1: Ship Data Handler ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[0]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[0]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[0]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[0]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[0]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[0]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[0]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[0]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[0]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[0]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[0]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[0]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[0]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[0]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[0]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[0]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[0]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[0]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[0]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 2: VDT A ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[1]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[1]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[1]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[1]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[1]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[1]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[1]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[1]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[1]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[1]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[1]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[1]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[1]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[1]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[1]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[1]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[1]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[1]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[1]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 3: VDT B ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[2]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[2]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[2]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[2]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[2]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[2]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[2]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[2]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[2]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[2]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[2]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[2]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[2]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[2]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[2]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[2]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[2]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[2]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[2]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 4: Dehydrator ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[3]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[3]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[3]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[3]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[3]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[3]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[3]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[3]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[3]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[3]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[3]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[3]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[3]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[3]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[3]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[3]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[3]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[3]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[3]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 5: SAP Power Management Unit (PMU) ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[4]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[4]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[4]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[4]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[4]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[4]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[4]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[4]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[4]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[4]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[4]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[4]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[4]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[4]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[4]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[4]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[4]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[4]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[4]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 6: I/O Panel ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[5]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[5]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[5]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[5]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[5]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[5]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[5]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[5]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[5]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[5]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[5]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[5]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[5]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[5]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[5]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[5]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[5]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[5]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[5]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 7: I/O Panel ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[6]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[6]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[6]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[6]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[6]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[6]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[6]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[6]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[6]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[6]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[6]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[6]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[6]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[6]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[6]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[6]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[6]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[6]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[6]['remarks']; ?></td>
						</tr>
					</div>

					<!-- ~~~~~~~~~~~~~~ Row 8: Hydraulic Door Pump ~~~~~~~~~~~~~~ -->
					<div>
						<tr>
							<td class="id id06"><?php echo $utilityrack06_array[7]['id']; ?></td>
							<td rowspan="2" class="componentName"><?php echo $utilityrack06_array[7]['name']; ?></td>
							<td class="status status06"><?php echo $utilityrack06_array[7]['c_status']; ?></td>
							<td class="condition condition06"><?php echo $utilityrack06_array[7]['c_condition']; ?></td>
							<td class="storob06"><?php echo $utilityrack06_array[7]['storob']; ?></td>
							<td class="id id07"><?php echo $utilityrack07_array[7]['id']; ?></td>
							<td class="status status07"><?php echo $utilityrack07_array[7]['c_status']; ?></td>
							<td class="condition condition07"><?php echo $utilityrack07_array[7]['c_condition']; ?></td>
							<td class="storob07"><?php echo $utilityrack07_array[7]['storob']; ?></td>
							<td class="id id08"><?php echo $utilityrack08_array[7]['id']; ?></td>
							<td class="status status08"><?php echo $utilityrack08_array[7]['c_status']; ?></td>
							<td class="condition condition08"><?php echo $utilityrack08_array[7]['c_condition']; ?></td>
							<td class="storob08"><?php echo $utilityrack08_array[7]['storob']; ?></td>
							<td class="id id09"><?php echo $utilityrack08_array[7]['id']; ?></td>
							<td class="status status09"><?php echo $utilityrack08_array[7]['c_status']; ?></td>
							<td class="condition condition09"><?php echo $utilityrack08_array[7]['c_condition']; ?></td>
							<td class="storob09"><?php echo $utilityrack08_array[7]['storob']; ?></td>
						</tr>

						<tr>
							<td colspan="3"><?php echo $utilityrack06_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack07_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack08_array[7]['remarks']; ?></td>
							<td colspan="3"><?php echo $utilityrack09_array[7]['remarks']; ?></td>
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