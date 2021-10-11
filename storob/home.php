<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Storob Tracker Page</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../01_stylesheets/09_storob_page/table/02_style_table_home.css">
        <link rel="stylesheet" href="../01_stylesheets/09_storob_page/01_style_home_page.css">

        <!-- JS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>

    <body>
        <?php require '../00_function_scripts/05_storob_tracker_display.php'; ?>

        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../overall_status/home.php"><i class="fas fa-database"></i></a> <br><br>
            <a href="../ships/home.php"><i class="fas fa-ship"></i></a> <br><br>
            <a href="../storob/home.php"><i class="fas fa-exchange-alt" id="current"></i></a> <br><br>
            <a href="../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">STOROB RECORDS</h2>
            <hr>
        </div>

        <div class="card" id="card2">
            <p>
                Storob is one of our way to get things done in a relatively short amount of time and it has existed long before MMS was formed. 
                Quick jobs however has a downside. Sometimes it gets messy! 
                So messy to a point that storob jobs are sometimes really hard to track and its information are scattered everywhere.
                MOSS enables you to tidy things up and helps you visualize whats going on in the "storobbing" business.
                  
            </p>
        </div>

        <div class="card" id="card3">
            <table>
                <tr>
                    <th class="table_heading"><a href="mms_records/all.php">MMS RECORDS</a></th>
                    <th class="table_heading"><a href="legacy_records/all.php">LEGACY RECORDS</a></th>
                </tr>

                <tr>
                    <td><a href="mms_records/2021.php"><button>2021</button></a></td>
                    <td><a href="legacy_records/2019.php"><button>2019</button></a></td>
                </tr>

                <tr>
                    <td><a href="mms_records/2020.php"><button>2020</button></a></td>
                    <td><a href="legacy_records/2018.php"><button>2018</button></a></td>
                </tr>

                <tr>
                    <td><a href="mms_records/2019.php"><button>2019</button></a></td>
                    <td><a href="legacy_records/2017.php"><button>2017</button></a></td>
                </tr>
            </table>
        </div>

        <!-- <div class="row" id="card2">
            <div class="column">
                <div class="card" id="minicard">
                    <a href="mms_records/all.php">
                        <h3 class="card-headline">MMS Records</h3>
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card" id="minicard">
                    <a href="mms_records/2019.php">
                        <h3 class="card-headline">2019</h3>
                    </a>
                </div>
            </div>
          
            <div class="column">
                <div class="card" id="minicard">
                    <a href="mms_records/2020.php">
                        <h3 class="card-headline">2020</h3>
                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card" id="minicard">
                    <a href="mms_records/2021.php">
                        <h3 class="card-headline">2021</h3>
                    </a>
                </div>
            </div> -->
        </div>
    </body>
</html>