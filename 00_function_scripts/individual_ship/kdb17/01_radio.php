<?php

    // db connection
    require "../../../../00_function_scripts/00_db_connection.php";

    // server rack
    $radio17 = $connection-> query("SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB17'") or die($connection-> error);

?>