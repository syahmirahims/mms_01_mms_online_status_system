<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Storob Tracker 2021</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../01_stylesheets/09_storob_page/table/01_style_table_all.css">
        <link rel="stylesheet" href="../../01_stylesheets/09_storob_page/02_style_table_page.css">

        <!-- JS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>

    <body>
        <?php require '../../00_function_scripts/05_storob_tracker_display.php'; ?>

        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../../overall_status/home.php"><i class="fas fa-database"></i></a> <br><br>
            <a href="../../ships/home.php"><i class="fas fa-ship"></i></a> <br><br>
            <a href="../../storob/home.php"><i class="fas fa-exchange-alt" id="current"></i></a> <br><br>
            <a href="../../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">STOROB TRACKER</h2>
        </div>

        <!-- #################### Menu #################### -->

        <!-- #################### Table #################### -->
        <div class="card card2" id="antenna">
            <table class="tableTitle">
                <tr>
                    <td class="title"><h4>Storob Record 2021</h4></td>
                    <td class="back2Top"><button class="btn btn-primary">Add Data</button></td>
                </tr>
            </table>
        </div>

        <div class="card" id="card3">
            <table>
                <tr>
                    <th rowspan="2" class="id">ID</th>
                    <th rowspan="2">Jobcard Status</th>
                    <th rowspan="2" class="storobId">Storob ID</th>
                    <th rowspan="2" class="componentName">Component Name</th>
                    <th colspan="2">Ship</th>
                    <th rowspan="2">Date</th>
                    <th rowspan="2" class="reference">Jobcard Reference</th>
                    <th rowspan="2" class="action">Action</th>
                </tr>

                <tr>
                    <th class="fromShip">From</th>
                    <th class="toShip">To</th>
                </tr>

                <!-- Opening Code for Fetching Data from Database -->
                <?php while ($strow2021 = $storobTracker2021-> fetch_assoc()): ?>

                <tr>
                    <td class="id"><?php echo $strow2021['id']; ?></td>
                    <td class="jobcardStatus"><?php echo $strow2021['jobcard_status']; ?></td>
                    <td class="storobId"><?php echo $strow2021['storob_id']; ?></td>
                    <td class="componentName"><?php echo $strow2021['component']; ?></td>
                    <td class="fromShip"><?php echo $strow2021['ship_from']; ?></td>
                    <td class="toShip"><?php echo $strow2021['ship_to']; ?></td>
                    <td class="date"><?php echo $strow2021['date_raised']; ?></td>
                    <td class="reference"><?php echo $strow2021['jobcard_no']; ?></td>
                    <td class="action"><button class="btn btn-link">Edit</button></td>
                </tr>

                <!-- Closing Code for Fetching Data from Database -->
                <?php endwhile; ?>

            </table>
        </div>

        <!-- #################### Cell Colour #################### -->

        <!-- #################### Jobcard Status: Open #################### -->
        <script>
            td_array = document.getElementsByTagName('td');
            check_value = "Open";

            for (i = 0; i < td_array.length; i++){
                if (td_array[i].textContent == check_value) {
                    td_array[i].style.background = "tomato";
                    td_array[i].style.color = "white";
                };
            };
        </script>

        <!-- #################### Jobcard Status: Closed #################### -->
        <script>
            td_array = document.getElementsByTagName('td');
            check_value = "Closed";

            for (i = 0; i < td_array.length; i++){
                if (td_array[i].textContent == check_value) {
                    td_array[i].style.background = "lightgreen";
                    td_array[i].style.color = "";
                };
            };
        </script>
    </body>
</html>