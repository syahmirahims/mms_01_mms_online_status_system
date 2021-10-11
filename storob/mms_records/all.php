<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMS Storob Tracker</title>

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

        <!-- ###################################################### -->
        <!-- #################### PHP Snippets #################### -->
        <!-- ###################################################### -->
        <?php 
            require '../../00_function_scripts/05_storob_tracker_display.php';
        
            // database connection
            require "../../00_function_scripts/00_db_connection.php";

            // add data function
            if (isset($_POST['add_data'])) {
                
                $id = $_POST['add_id'];
                $jobcard_status = $_POST['jobcard_status'];
                $storob_id = $_POST['storob_id'];
                $component = $_POST['component'];
                $ship_from = $_POST['ship_from'];
                $ship_to = $_POST['ship_to'];
                $opdef_no = $_POST['opdef_no'];
                $jobcard_no = $_POST['jobcard_no'];
                $date_raised = $_POST['date_raised'];
                $remarks = $_POST['remarks'];
                $workshop = $_POST['workshop'];
                $job_status = $_POST['job_status'];
                $action_by = $_POST['action_by'];
                $pr_number = $_POST['pr_number'];
                $po_number = $_POST['po_number'];
                $po_edd = $_POST['po_edd'];
                $commercial_designation = $_POST['commercial_designation'];
                $task_code = $_POST['task_code'];

                $add_query = "INSERT INTO storob_data (jobcard_status, storob_id, component, ship_from, ship_to, opdef_no, jobcard_no, date_raised, remarks, workshop, job_status, action_by, pr_number, po_number, po_edd, commercial_designation, task_code)
                VALUES ('$jobcard_status', '$storob_id', '$component', '$ship_from', '$ship_to', '$opdef_no', '$jobcard_no', '$date_raised', '$remarks', '$workshop', '$job_status', '$action_by', '$pr_number', '$po_number', '$po_edd', '$commercial_designation', '$task_code')";

                $add_query_run = mysqli_query($connection, $add_query);

                if ($add_query_run) {
                    echo "<script type='text/javascript'>
                    alert('New data has been added');
                    window.history.back();
                    </script>";
                    exit();
                } else {
                    echo "<script type='text/javascript'>
                    alert('Error');
                    </script>";
                    exit();
                }
            }

            // update data function
            if(isset($_POST['updatedata'])){

                $id = $_POST['update_id'];
                $jc_status = $_POST['jobcardStatus'];
                $storob_id = $_POST['storob_id'];
                $component_name = $_POST['componentName'];
                $location_from = $_POST['locationFrom'];
                $location_to = $_POST['locationTo'];
                $date = $_POST['jobcardDate'];
                $jc_reference = $_POST['jobcardReference'];

                $update_query = "UPDATE storob_data 
                SET 
                jobcard_status = '$jc_status',
                storob_id = '$storob_id',
                component = '$component_name',
                ship_from = '$location_from',
                ship_to = '$location_to',
                date_raised = '$date',
                jobcard_no = '$jc_reference'
                
                WHERE id='$id'";

                $update_query_run = mysqli_query($connection, $update_query);

                if($update_query_run){
                    echo "<script type='text/javascript'> 
                    alert('Storob ID $storob_id data is updated');
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

                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="name" class="form-control" name="update_id" id="update_id" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Jobcard Status</label>
                                    <select class="form-control" name="jobcardStatus" id="jobcardStatus">
                                        <option value="Open">Open</option>
                                        <option value="Closed">Closed</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Storob ID</label>
                                    <input type="name" class="form-control" name="storob_id" id="storob_id">
                                </div>
                                
                                <div class="form-group">
                                    <label>Component Name</label>
                                    <textarea class="form-control" name="componentName" id="componentName" rows="2"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>From</label>
                                    <input type="name" class="form-control" name="locationFrom" id="locationFrom">
                                </div>

                                <div class="form-group">
                                    <label>To</label>
                                    <input type="name" class="form-control" name="locationTo" id="locationTo">
                                </div>

                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="jobcardDate" id="jobcardDate">
                                </div>

                                <div class="form-group">
                                    <label>Jobcard Reference</label>
                                    <input type="name" class="form-control" name="jobcardReference" id="jobcardReference">
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
                    $('#jobcardStatus').val(data[1]);
                    $('#storob_id').val(data[2]);
                    $('#componentName').val(data[3]);
                    $('#locationFrom').val(data[4]);
                    $('#locationTo').val(data[5]);
                    $('#jobcardDate').val(data[6]);
                    $('#jobcardReference').val(data[7]);
                    });
                });
            </script>
        </section>

        <!-- ################################################### -->
        <!-- #################### Add Modal #################### -->
        <!-- ################################################### -->
        <section>
            <!-- Modal to Add data -->
            <div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header Code -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Modal Body Code that contains form -->
                        <form action="" method="POST">
                            <div class="modal-body">

                            <!-- column 1: id -->
                            <!-- <div class="form-group">
                                <label>ID</label>
                                <input type="name" class="form-control" name="add_id" id="add_id">
                            </div> -->

                            <!-- column 2: jobcard_status -->
                            <div class="form-group">
                                <label>Jobcard Status</label>
                                <select class="form-control" name="jobcard_status" id="jobcard_status">
                                    <option value="Open">Open</option>
                                    <option value="Closed">Closed</option>
                                    <option value="N/A">N/A</option>
                                </select>
                            </div>

                            <!-- column 3: storob_id -->
                            <div class="form-group">
                                <label>Storob ID</label>
                                <input type="name" class="form-control" name="storob_id" id="storob_id">
                            </div>
                            
                            <!-- column 4: component -->
                            <div class="form-group">
                                <label>Component Name</label>
                                <textarea class="form-control" name="component" id="component" rows="2"></textarea>
                            </div>

                            <!-- column 5: ship_from -->
                            <div class="form-group">
                                <label>From</label>
                                <input type="name" class="form-control" name="ship_from" id="ship_from">
                            </div>

                            <!-- column 6: ship_to -->
                            <div class="form-group">
                                <label>To</label>
                                <input type="name" class="form-control" name="ship_to" id="ship_to">
                            </div>

                            <!-- column 7: opdef_no -->
                            <div class="form-group">
                                <label>OPDEF No.</label>
                                <input type="name" class="form-control" name="opdef_no" id="opdef_no">
                            </div>


                            <!-- column 8: jobcard_no -->
                            <div class="form-group">
                                <label>Jobcard Reference</label>
                                <input type="name" class="form-control" name="jobcard_no" id="jobcard_no">
                            </div>

                            <!-- column 9: date_raised -->
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date_raised" id="date_raised">
                            </div>

                            <!-- column 10: remarks -->
                            <div class="form-group">
                                <label>Remarks</label>
                                <textarea class="form-control" name="remarks" id="remarks" rows="2"></textarea>
                            </div>

                            <!-- column 11: workshop -->
                            <div class="form-group">
                                <label>Workshop</label>
                                <input type="name" class="form-control" name="workshop" id="workshop">
                            </div>

                            <!-- column 12: job_status -->
                            <div class="form-group">
                                <label>Job Status</label>
                                <input type="name" class="form-control" name="job_status" id="job_status">
                            </div>

                            <!-- column 13: action_by -->
                            <div class="form-group">
                                <label>Action By</label>
                                <input type="name" class="form-control" name="action_by" id="action_by">
                            </div>

                            <!-- column 14: pr_number -->
                            <div class="form-group">
                                <label>PR  No.</label>
                                <input type="name" class="form-control" name="pr_number" id="pr_number">
                            </div>

                            <!-- column 15: po_number -->
                            <div class="form-group">
                                <label>PO No.</label>
                                <input type="name" class="form-control" name="po_number" id="po_number">
                            </div>

                            <!-- column 16: po_edd -->
                            <div class="form-group">
                                <label>PO EDD</label>
                                <input type="name" class="form-control" name="po_edd" id="po_edd">
                            </div>

                            <!-- column 17: commercial_designation -->
                            <div class="form-group">
                                <label>Commercial Designation</label>
                                <input type="name" class="form-control" name="commercial_designation" id="commercial_designation">
                            </div>

                            <!-- column 18: task_code -->
                            <div class="form-group">
                                <label>Task Code</label>
                                <input type="name" class="form-control" name="task_code" id="task_code">
                            </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="add_data" class="btn btn-success">Add Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- jQuery Modal Trigger -->
            <script>
                $(document).ready(function() {
                    $('.addbtn').on('click', function() {
                    $('#addmodal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#update_id').val(data[0]);
                    $('#jobcardStatus').val(data[1]);
                    $('#storob_id').val(data[2]);
                    $('#componentName').val(data[3]);
                    $('#locationFrom').val(data[4]);
                    $('#locationTo').val(data[5]);
                    $('#jobcardDate').val(data[6]);
                    $('#jobcardReference').val(data[7]);
                    });
                });
            </script>
        </section>

        <!-- ############################################### -->
        <!-- #################### Table #################### -->
        <!-- ############################################### -->
        <section>
            <div class="card card2" id="antenna">
                <table class="tableTitle">
                    <tr>
                        <td class="title"><h4>All MMS Storob Record</h4></td>
                        <td class="back2Top"><button class="btn btn-primary addbtn">Add Data</button></td>
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
                    <?php while ($strow = $storobTracker-> fetch_assoc()): ?>

                    <tr>
                        <td class="id"><?php echo $strow['id']; ?></td>
                        <td class="jobcardStatus"><?php echo $strow['jobcard_status']; ?></td>
                        <td class="storobId"><?php echo $strow['storob_id']; ?></td>
                        <td class="componentName"><?php echo $strow['component']; ?></td>
                        <td class="fromShip"><?php echo $strow['ship_from']; ?></td>
                        <td class="toShip"><?php echo $strow['ship_to']; ?></td>
                        <td class="date"><?php echo $strow['date_raised']; ?></td>
                        <td class="reference"><?php echo $strow['jobcard_no']; ?></td>
                        <td class="action"><button class="btn btn-link updatebtn">Edit</button></td>
                    </tr>

                    <!-- Closing Code for Fetching Data from Database -->
                    <?php endwhile; ?>

                </table>
            </div>
        </section>

        <!-- ##################################################### -->
        <!-- #################### Cell Colour #################### -->
        <!-- ##################################################### -->
        <section>
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
        </section>


    </body>
</html>