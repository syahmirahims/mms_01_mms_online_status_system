<?php

    // db connection
    require "../../../../00_function_scripts/00_db_connection.php";

    // server rack
    $radio07 = $connection-> query("SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB07'") or die($connection-> error);

?>