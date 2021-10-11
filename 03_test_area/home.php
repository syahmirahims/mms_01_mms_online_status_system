<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Area</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">

        <!-- JS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- Page Heading -->
        <div class="container">
            <h2>TEST AREA</h2>
            <hr>
            <p>Add Data Function</p>
        </div>

        <!-- PHP Function -->
        <?php
            require "../00_function_scripts/00_db_connection.php";

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

                $query = "INSERT INTO storob_data (jobcard_status, storob_id, component, ship_from, ship_to, opdef_no, jobcard_no, date_raised, remarks, workshop, job_status, action_by, pr_number, po_number, po_edd, commercial_designation, task_code)
                VALUES ('$jobcard_status', '$storob_id', '$component', '$ship_from', '$ship_to', '$opdef_no', '$jobcard_no', '$date_raised', '$remarks', '$workshop', '$job_status', '$action_by', '$pr_number', '$po_number', '$po_edd', '$commercial_designation', '$task_code')";

                $query_run = mysqli_query($connection, $query);

                if ($query_run) {
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

        ?>

        <!-- Add Data Form -->
        <div class="container">
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

    </body>
</html>