<?php
    // database connection
    require "00_db_connection.php";

    // display query for Storob Tracker All
    $storobTracker = $connection-> query("SELECT id, jobcard_status, storob_id, component, ship_from, ship_to, date_raised, jobcard_no 
    FROM storob_data
    ORDER BY id DESC") or die($connection-> error);

    // display query for Storob Tracker 2021
    $storobTracker2021 = $connection-> query("SELECT id, jobcard_status, storob_id, component, ship_from, ship_to, date_raised, jobcard_no 
    FROM storob_data
    WHERE storob_id LIKE '%/21%'
    ORDER BY id DESC") or die($connection-> error);

    // display query for Storob Tracker 2020
    $storobTracker2020 = $connection-> query("SELECT id, jobcard_status, storob_id, component, ship_from, ship_to, date_raised, jobcard_no 
    FROM storob_data
    WHERE storob_id LIKE '%/20%'
    ORDER BY id DESC") or die($connection-> error);

    // display query for Storob Tracker 2019
    $storobTracker2019 = $connection-> query("SELECT id, jobcard_status, storob_id, component, ship_from, ship_to, date_raised, jobcard_no 
    FROM storob_data
    WHERE storob_id LIKE '%/19%'
    ORDER BY id DESC") or die($connection-> error);
?>