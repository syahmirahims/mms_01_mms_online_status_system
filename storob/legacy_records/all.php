<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Legacy Storob Tracker</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../01_stylesheets/09_storob_page/table/01_style_table_all.css">
        <link rel="stylesheet" href="../../01_stylesheets/09_storob_page/02_style_table_page.css">
        <link rel="stylesheet" href="../../01_stylesheets/00_essentials/01_site_under_construction.css">

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

        <div>
            <img class="under_construction" src="../../images/26_site_under_construction_2.png" alt="Site Under Construction">
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