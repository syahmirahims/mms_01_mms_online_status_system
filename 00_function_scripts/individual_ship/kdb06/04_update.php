<?php
    // database connection
    require "../../../00_function_scripts/00_db_connection.php";

	if(isset($_POST['updatedata'])){

		$id = $_POST['update_id'];

		$name_id = $_POST['name_id'];
		$status_id = $_POST['status_id'];
		$condition_id = $_POST['condition_id'];

		$query = "UPDATE components SET c_status='$status_id', c_condition='$condition_id' WHERE id='$id'";
		$query_run = mysqli_query($connection, $query);

		if($query_run){
			header("location: ../../../ships/fleet_A/darussalam_class/kdb06/c2_system.php");
			exit();
		} else {
			echo '<script> alert("Error"); </script>';
		}
	}

?>