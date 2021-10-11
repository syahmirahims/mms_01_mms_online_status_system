<?php

    // db connection
    require "../../00_function_scripts/00_db_connection.php";

    // display table for Server Rack
    $serverrack = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
      
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id
      
    WHERE s.abbv = 'KDB09' AND pn.name = 'Server Rack'") or die($connection-> error);

    // display table for WMFCC Rack
    $wmfccrack = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
      
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id

    WHERE s.abbv = 'KDB09' AND pn.name = 'WMFCC Rack'") or die($connection-> error);

    // display table for Radio Room
    $radioroom = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
      
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id
        
    WHERE s.abbv = 'KDB09' AND pn.name = 'Radio Room'") or die($connection-> error);

    // display table for WMFC 1
    $wmfc1 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
      
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id
        
    WHERE s.abbv = 'KDB09' AND pn.name = 'WMFC 1 (Workstation)'") or die($connection-> error);

    // display table for WMFC 2
    $wmfc2 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
      
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id
        
    WHERE s.abbv = 'KDB09' AND pn.name = 'WMFC 2 (Workstation)'") or die($connection-> error);

    // display table for LSD System
    $lsdsystem = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
      
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id
        
    WHERE s.abbv = 'KDB09' AND pn.name = 'LSD System'") or die($connection-> error);

?>