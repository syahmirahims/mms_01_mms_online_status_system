<!-- DB Connection -->
<?php require "../../00_function_scripts/00_db_connection.php"; ?>

<!-- Server Rack -->
<?php
    $serverrack06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'Server Rack'";

    $serverrack07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Server Rack'";

    $serverrack08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'Server Rack'";

    $resultsr06 = mysqli_query($connection, $serverrack06);
    $resultsr07 = mysqli_query($connection, $serverrack07);
    $resultsr08 = mysqli_query($connection, $serverrack08);

    $sr06array = array();
    $sr07array = array();
    $sr08array = array();
    if (mysqli_num_rows($resultsr06) > 0) {
        while($sr06row = mysqli_fetch_assoc($resultsr06)){
            $sr06array[] = $sr06row;
        }
    }
    if (mysqli_num_rows($resultsr07) > 0) {
        while($sr07row = mysqli_fetch_assoc($resultsr07)){
            $sr07array[] = $sr07row;
        }
    }
    if (mysqli_num_rows($resultsr08) > 0) {
        while($sr08row = mysqli_fetch_assoc($resultsr08)){
            $sr08array[] = $sr08row;
        }
    }
?>

<!-- WMFCC Rack 1 -->
<?php
    $wmfcc1rack06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'WMFCC Rack 1'";

    $wmfcc1rack07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFCC Rack 1'";

    $wmfcc1rack08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'WMFCC Rack 1'";

    $result_wmfcc1rack06 = mysqli_query($connection, $wmfcc1rack06);
    $result_wmfcc1rack07 = mysqli_query($connection, $wmfcc1rack07);
    $result_wmfcc1rack08 = mysqli_query($connection, $wmfcc1rack08);

    $wmfcc1rack06_array = array();
    $wmfcc1rack07_array = array();
    $wmfcc1rack08_array = array();
    if (mysqli_num_rows($result_wmfcc1rack06) > 0) {
        while($wmfcc1rack06_row = mysqli_fetch_assoc($result_wmfcc1rack06)){
            $wmfcc1rack06_array[] = $wmfcc1rack06_row;
        }
    }
    if (mysqli_num_rows($result_wmfcc1rack07) > 0) {
        while($wmfcc1rack07_row = mysqli_fetch_assoc($result_wmfcc1rack07)){
            $wmfcc1rack07_array[] = $wmfcc1rack07_row;
        }
    }
    if (mysqli_num_rows($result_wmfcc1rack08) > 0) {
        while($wmfcc1rack08_row = mysqli_fetch_assoc($result_wmfcc1rack08)){
            $wmfcc1rack08_array[] = $wmfcc1rack08_row;
        }
    }
?>

<!-- WMFCC Rack 2 -->
<?php
    $wmfcc2rack06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'WMFCC Rack 2'";

    $wmfcc2rack07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFCC Rack 2'";

    $wmfcc2rack08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'WMFCC Rack 2'";

    $result_wmfcc2rack06 = mysqli_query($connection, $wmfcc2rack06);
    $result_wmfcc2rack07 = mysqli_query($connection, $wmfcc2rack07);
    $result_wmfcc2rack08 = mysqli_query($connection, $wmfcc2rack08);

    $wmfcc2rack06_array = array();
    $wmfcc2rack07_array = array();
    $wmfcc2rack08_array = array();
    if (mysqli_num_rows($result_wmfcc2rack06) > 0) {
        while($wmfcc2rack06_row = mysqli_fetch_assoc($result_wmfcc2rack06)){
            $wmfcc2rack06_array[] = $wmfcc2rack06_row;
        }
    }
    if (mysqli_num_rows($result_wmfcc2rack07) > 0) {
        while($wmfcc2rack07_row = mysqli_fetch_assoc($result_wmfcc2rack07)){
            $wmfcc2rack07_array[] = $wmfcc2rack07_row;
        }
    }
    if (mysqli_num_rows($result_wmfcc2rack08) > 0) {
        while($wmfcc2rack08_row = mysqli_fetch_assoc($result_wmfcc2rack08)){
            $wmfcc2rack08_array[] = $wmfcc2rack08_row;
        }
    }
?>

<!-- Radio Room -->
<?php
    $radioroom06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'Radio Room'";

    $radioroom07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Radio Room'";

    $radioroom08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'Radio Room'";

    $result_radioroom06 = mysqli_query($connection, $radioroom06);
    $result_radioroom07 = mysqli_query($connection, $radioroom07);
    $result_radioroom08 = mysqli_query($connection, $radioroom08);

    $radioroom06_array = array();
    $radioroom07_array = array();
    $radioroom08_array = array();
    if (mysqli_num_rows($result_radioroom06) > 0) {
        while($radioroom06_row = mysqli_fetch_assoc($result_radioroom06)){
            $radioroom06_array[] = $radioroom06_row;
        }
    }
    if (mysqli_num_rows($result_radioroom07) > 0) {
        while($radioroom07_row = mysqli_fetch_assoc($result_radioroom07)){
            $radioroom07_array[] = $radioroom07_row;
        }
    }
    if (mysqli_num_rows($result_radioroom08) > 0) {
        while($radioroom08_row = mysqli_fetch_assoc($result_radioroom08)){
            $radioroom08_array[] = $radioroom08_row;
        }
    }
?>

<!-- WMFC 1 (Workstation) -->
<?php
    $wmfc1ws06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'WMFC 1 (Workstation)'";

    $wmfc1ws07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 1 (Workstation)'";

    $wmfc1ws08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'WMFC 1 (Workstation)'";

    $result_wmfc1ws06 = mysqli_query($connection, $wmfc1ws06);
    $result_wmfc1ws07 = mysqli_query($connection, $wmfc1ws07);
    $result_wmfc1ws08 = mysqli_query($connection, $wmfc1ws08);

    $wmfc1ws06_array = array();
    $wmfc1ws07_array = array();
    $wmfc1ws08_array = array();
    if (mysqli_num_rows($result_wmfc1ws06) > 0) {
        while($wmfc1ws06_row = mysqli_fetch_assoc($result_wmfc1ws06)){
            $wmfc1ws06_array[] = $wmfc1ws06_row;
        }
    }
    if (mysqli_num_rows($result_wmfc1ws07) > 0) {
        while($wmfc1ws07_row = mysqli_fetch_assoc($result_wmfc1ws07)){
            $wmfc1ws07_array[] = $wmfc1ws07_row;
        }
    }
    if (mysqli_num_rows($result_wmfc1ws08) > 0) {
        while($wmfc1ws08_row = mysqli_fetch_assoc($result_wmfc1ws08)){
            $wmfc1ws08_array[] = $wmfc1ws08_row;
        }
    }
?>

<!-- WMFC 2 (Workstation) -->
<?php
    $wmfc2ws06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'WMFC 2 (Workstation)'";

    $wmfc2ws07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 2 (Workstation)'";

    $wmfc2ws08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'WMFC 2 (Workstation)'";

    $result_wmfc2ws06 = mysqli_query($connection, $wmfc2ws06);
    $result_wmfc2ws07 = mysqli_query($connection, $wmfc2ws07);
    $result_wmfc2ws08 = mysqli_query($connection, $wmfc2ws08);

    $wmfc2ws06_array = array();
    $wmfc2ws07_array = array();
    $wmfc2ws08_array = array();
    if (mysqli_num_rows($result_wmfc2ws06) > 0) {
        while($wmfc2ws06_row = mysqli_fetch_assoc($result_wmfc2ws06)){
            $wmfc2ws06_array[] = $wmfc2ws06_row;
        }
    }
    if (mysqli_num_rows($result_wmfc2ws07) > 0) {
        while($wmfc2ws07_row = mysqli_fetch_assoc($result_wmfc2ws07)){
            $wmfc2ws07_array[] = $wmfc2ws07_row;
        }
    }
    if (mysqli_num_rows($result_wmfc2ws08) > 0) {
        while($wmfc2ws08_row = mysqli_fetch_assoc($result_wmfc2ws08)){
            $wmfc2ws08_array[] = $wmfc2ws08_row;
        }
    }
?>

<!-- WMFC 3 (Workstation) -->
<?php
    $wmfc3ws06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'WMFC 3 (Workstation)'";

    $wmfc3ws07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 3 (Workstation)'";

    $wmfc3ws08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'WMFC 3 (Workstation)'";

    $result_wmfc3ws06 = mysqli_query($connection, $wmfc3ws06);
    $result_wmfc3ws07 = mysqli_query($connection, $wmfc3ws07);
    $result_wmfc3ws08 = mysqli_query($connection, $wmfc3ws08);

    $wmfc3ws06_array = array();
    $wmfc3ws07_array = array();
    $wmfc3ws08_array = array();
    if (mysqli_num_rows($result_wmfc3ws06) > 0) {
        while($wmfc3ws06_row = mysqli_fetch_assoc($result_wmfc3ws06)){
            $wmfc3ws06_array[] = $wmfc3ws06_row;
        }
    }
    if (mysqli_num_rows($result_wmfc3ws07) > 0) {
        while($wmfc3ws07_row = mysqli_fetch_assoc($result_wmfc3ws07)){
            $wmfc3ws07_array[] = $wmfc3ws07_row;
        }
    }
    if (mysqli_num_rows($result_wmfc3ws08) > 0) {
        while($wmfc3ws08_row = mysqli_fetch_assoc($result_wmfc3ws08)){
            $wmfc3ws08_array[] = $wmfc3ws08_row;
        }
    }
?>

<!-- WMFC 4 (Workstation) -->
<?php
    $wmfc4ws06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 

    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 

    WHERE s.abbv = 'KDB06' AND pn.name = 'WMFC 4 (Workstation)'";

    $wmfc4ws07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 

    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 

    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 4 (Workstation)'";

    $wmfc4ws08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 

    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 

    WHERE s.abbv = 'KDB08' AND pn.name = 'WMFC 4 (Workstation)'";

    $result_wmfc4ws06 = mysqli_query($connection, $wmfc4ws06);
    $result_wmfc4ws07 = mysqli_query($connection, $wmfc4ws07);
    $result_wmfc4ws08 = mysqli_query($connection, $wmfc4ws08);

    $wmfc4ws06_array = array();
    $wmfc4ws07_array = array();
    $wmfc4ws08_array = array();
    if (mysqli_num_rows($result_wmfc4ws06) > 0) {
        while($wmfc4ws06_row = mysqli_fetch_assoc($result_wmfc4ws06)){
            $wmfc4ws06_array[] = $wmfc4ws06_row;
        }
    }
    if (mysqli_num_rows($result_wmfc4ws07) > 0) {
        while($wmfc4ws07_row = mysqli_fetch_assoc($result_wmfc4ws07)){
            $wmfc4ws07_array[] = $wmfc4ws07_row;
        }
    }
    if (mysqli_num_rows($result_wmfc4ws08) > 0) {
        while($wmfc4ws08_row = mysqli_fetch_assoc($result_wmfc4ws08)){
            $wmfc4ws08_array[] = $wmfc4ws08_row;
        }
    }
?>

<!-- LSD System -->
<?php
    $lsdsystem06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'LSD System'";

    $lsdsystem07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'LSD System'";

    $lsdsystem08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'LSD System'";

    $result_lsdsystem06 = mysqli_query($connection, $lsdsystem06);
    $result_lsdsystem07 = mysqli_query($connection, $lsdsystem07);
    $result_lsdsystem08 = mysqli_query($connection, $lsdsystem08);

    $lsdsystem06_array = array();
    $lsdsystem07_array = array();
    $lsdsystem08_array = array();
    if (mysqli_num_rows($result_lsdsystem06) > 0) {
        while($lsdsystem06_row = mysqli_fetch_assoc($result_lsdsystem06)){
            $lsdsystem06_array[] = $lsdsystem06_row;
        }
    }
    if (mysqli_num_rows($result_lsdsystem07) > 0) {
        while($lsdsystem07_row = mysqli_fetch_assoc($result_lsdsystem07)){
            $lsdsystem07_array[] = $lsdsystem07_row;
        }
    }
    if (mysqli_num_rows($result_lsdsystem08) > 0) {
        while($lsdsystem08_row = mysqli_fetch_assoc($result_lsdsystem08)){
            $lsdsystem08_array[] = $lsdsystem08_row;
        }
    }
?>

<!-- Junction Box (LSD System) -->
<?php
    $junctionboxlsdsystem06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'Junction Box (LSD System)'";

    $junctionboxlsdsystem07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Junction Box (LSD System)'";

    $junctionboxlsdsystem08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'Junction Box (LSD System)'";

    $result_junctionboxlsdsystem06 = mysqli_query($connection, $junctionboxlsdsystem06);
    $result_junctionboxlsdsystem07 = mysqli_query($connection, $junctionboxlsdsystem07);
    $result_junctionboxlsdsystem08 = mysqli_query($connection, $junctionboxlsdsystem08);

    $junctionboxlsdsystem06_array = array();
    $junctionboxlsdsystem07_array = array();
    $junctionboxlsdsystem08_array = array();
    if (mysqli_num_rows($result_junctionboxlsdsystem06) > 0) {
        while($junctionboxlsdsystem06_row = mysqli_fetch_assoc($result_junctionboxlsdsystem06)){
            $junctionboxlsdsystem06_array[] = $junctionboxlsdsystem06_row;
        }
    }
    if (mysqli_num_rows($result_junctionboxlsdsystem07) > 0) {
        while($junctionboxlsdsystem07_row = mysqli_fetch_assoc($result_junctionboxlsdsystem07)){
            $junctionboxlsdsystem07_array[] = $junctionboxlsdsystem07_row;
        }
    }
    if (mysqli_num_rows($result_junctionboxlsdsystem08) > 0) {
        while($junctionboxlsdsystem08_row = mysqli_fetch_assoc($result_junctionboxlsdsystem08)){
            $junctionboxlsdsystem08_array[] = $junctionboxlsdsystem08_row;
        }
    }