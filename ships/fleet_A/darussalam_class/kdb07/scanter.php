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
        <title>KDB07 Radio</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../../01_stylesheets/01_navbars/02_style_side_navbar.css">
        <link rel="stylesheet" href="../../../../01_stylesheets/08_ships_page/kdb07/03_style_radio_page.css">

        <!-- JS CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require "../../../../00_function_scripts/individual_ship/kdb07/03_scanter.php"; ?>

        <div class="sidenav">
            <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a> <br><br>
            <a href="../../../../home.php"><i class="fas fa-tachometer-alt"></i></a> <br><br>
            <a href="../../../../overall_status/home.php"><i class="fas fa-database"></i></a> <br><br>
            <a href="../../../../ships/home.php"><i class="fas fa-ship" id="current"></i></a> <br><br>
            <a href="../../../../storob/home.php"><i class="fas fa-exchange-alt"></i></a> <br><br>
            <a href="../../../../00_function_scripts/02_logout_script.php" style="bottom: 0;"><i class="fas fa-user-circle"></i></a>
        </div>

        <div class="card" id="card1">
            <h2 class="headline">KDB07</h2>
            <h4 class="subheadline">SCANTER STATUS</h4>
        </div>

        <!-- ###################################################### -->
        <!-- #################### PHP Snippets #################### -->
        <!-- ###################################################### -->
        <?php 
            require "../../../../00_function_scripts/individual_ship/kdb06/01_c2system.php"; 
        
            // database connection
            require "../../../../00_function_scripts/00_db_connection.php";

            if(isset($_POST['updatedata'])){

                $id = $_POST['update_id'];

                $name_id = $_POST['name_id'];
                $status_id = $_POST['status_id'];
                $condition_id = $_POST['condition_id'];
                $storob_id = $_POST['storob_id'];
                $remarks = $_POST['remarks'];

                $query = "UPDATE components SET c_status='$status_id', c_condition='$condition_id', storob='$storob_id', remarks='$remarks' WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);

                if($query_run){
                    echo "<script type='text/javascript'> 
                    alert('$name_id data is updated');
                    window.history.back();
                    </script>";
                    exit();
                } else {
                    echo '<script> alert("Error"); </script>';
                }
            }
        ?>

        <!-- ###################################################### -->
        <!-- #################### Update Modal #################### -->
        <!-- ###################################################### -->
        <section>
            <!-- Modal to update data -->
            <div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header Code -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Modal Body Code that contains form -->
                        <form action="" method="POST">
                            <div class="modal-body">

                                <input type="hidden" class="form-control" name="update_id" id="update_id" readonly>

                                <div class="form-group">
                                    <label>Component Name</label>
                                    <input type="name" class="form-control" name="name_id" id="name_id" value="Enter Part Name..." readonly>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status_id" id="status_id">
                                        <option value="Operational">Operational</option>
                                        <option value="Non-Operational">Non-Operational</option>
                                        <option value="Operational with Issue">Operational with Issue</option>
                                        <option value="Empty">Empty</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Condition</label>
                                    <select class="form-control" name="condition_id" id="condition_id">
                                        <option value="-">-</option>
                                        <option value="New">New</option>
                                        <option value="Degraded">Degraded</option>
                                        <option value="Defective">Defective</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Storob</label>
                                    <select class="form-control" name="storob_id" id="storob_id">
                                        <option value="-">-</option>
                                        <option value="To KDB06">To KDB06</option>
                                        <option value="To KDB08">To KDB08</option>
                                        <option value="To KDB09">To KDB09</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Remarks</label>
                                    <textarea class="form-control" name="remarks" id="remarks" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- jQuery Modal Trigger -->
            <script>
                $(document).ready(function() {
                    $('.updatebtn').on('click', function() {
                    $('#updatemodal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#update_id').val(data[0]);
                    $('#name_id').val(data[1]);
                    $('#status_id').val(data[2]);
                    $('#condition_id').val(data[3]);
                    $('#storob_id').val(data[4]);
                    $('#remarks').val(data[5]);
                    });
                });
            </script>
        </section>

        <!-- ##################################################### -->
        <!-- #################### Table Codes #################### -->
        <!-- ##################################################### -->
        <section>

            <!-- ################ Antenna ################ -->
            <section>
                <div class="card card2" id="serverRack">
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
                            <th class="id">ID</th>
                            <th class="componentName">Component Name</th>
                            <th class="status">Status</th>
                            <th class="condition">Condition</th>
                            <th class="storob">Storob</th>
                            <th class="remarks">Remarks</th>
                            <th class="action">Action</th>
                        </tr>

                        <!-- Opening code for Fetching Data -->
                        <?php while ($antenna07row = $antenna07-> fetch_assoc()): ?>

                        <tr>
                            <td class="id"><?php echo $antenna07row['id']; ?></td>
                            <td class="componentName"><?php echo $antenna07row['name']; ?></td>
                            <td class="status"><?php echo $antenna07row['c_status']; ?></td>
                            <td class="condition"><?php echo $antenna07row['c_condition']; ?></td>
                            <td class="storob"><?php echo $antenna07row['storob']; ?></td>
                            <td class="remarks"><?php echo $antenna07row['remarks']; ?></td>
                            <td class="action"><button class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <!-- Closing code for Fetching Data -->
                        <?php endwhile; ?>
                    </table>
                </div>
            </section>

            <!-- ################ Transceiver ################ -->
            <section>
                <div class="card card2" id="serverRack">
                    <table class="tableTitle">
                        <tr>
                            <td class="title"><h4>Transceiver</h4></td>
                            <td class="back2Top"></td>
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
                            <th class="action">Action</th>
                        </tr>

                        <!-- Opening code for Fetching Data -->
                        <?php while ($transceiver07row = $transceiver07-> fetch_assoc()): ?>

                        <tr>
                            <td class="id"><?php echo $transceiver07row['id']; ?></td>
                            <td class="componentName"><?php echo $transceiver07row['name']; ?></td>
                            <td class="status"><?php echo $transceiver07row['c_status']; ?></td>
                            <td class="condition"><?php echo $transceiver07row['c_condition']; ?></td>
                            <td class="storob"><?php echo $transceiver07row['storob']; ?></td>
                            <td class="remarks"><?php echo $transceiver07row['remarks']; ?></td>
                            <td class="action"><button class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <!-- Closing code for Fetching Data -->
                        <?php endwhile; ?>
                    </table>
                </div>
            </section>

            <!-- ################ Utility Rack ################ -->
            <section>
                <div class="card card2" id="serverRack">
                    <table class="tableTitle">
                        <tr>
                            <td class="title"><h4>Utility Rack</h4></td>
                            <td class="back2Top"></td>
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
                            <th class="action">Action</th>
                        </tr>

                        <!-- Opening code for Fetching Data -->
                        <?php while ($utilityrack07row = $utilityrack07-> fetch_assoc()): ?>

                        <tr>
                            <td class="id"><?php echo $utilityrack07row['id']; ?></td>
                            <td class="componentName"><?php echo $utilityrack07row['name']; ?></td>
                            <td class="status"><?php echo $utilityrack07row['c_status']; ?></td>
                            <td class="condition"><?php echo $utilityrack07row['c_condition']; ?></td>
                            <td class="storob"><?php echo $utilityrack07row['storob']; ?></td>
                            <td class="remarks"><?php echo $utilityrack07row['remarks']; ?></td>
                            <td class="action"><button class="btn btn-link updatebtn">Update</button></td>
                        </tr>

                        <!-- Closing code for Fetching Data -->
                        <?php endwhile; ?>
                    </table>
                </div>
            </section>

        </section>

        <!-- ####################################################################### -->
        <!-- #################### Cell Colour Automation Script #################### -->
        <!-- ####################################################################### -->
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