<?php

    // db connection
    require "../../../../00_function_scripts/00_db_connection.php";

    // server rack
    $serverrack07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Server Rack'") or die($connection-> error);

    // WMFCC Rack 1
    $wmfcc1rack07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFCC Rack 1'") or die($connection-> error);

    // WMFCC Rack 2
    $wmfcc2rack07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFCC Rack 2'") or die($connection-> error);

    // Radio Room
    $radioroom07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Radio Room'") or die($connection-> error);

    // WMFC 1 (Workstation)
    $wmfc1ws07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 1 (Workstation)'") or die($connection-> error);

    // WMFC 2 (Workstation)
    $wmfc2ws07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 2 (Workstation)'") or die($connection-> error);

    // WMFC 3 (Workstation)
    $wmfc3ws07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 3 (Workstation)'") or die($connection-> error);

    // WMFC 4 (Workstation)
    $wmfc4ws07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 

    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 

    WHERE s.abbv = 'KDB07' AND pn.name = 'WMFC 4 (Workstation)'") or die($connection-> error);

    // LSD System
    $lsdsystem07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'LSD System'") or die($connection-> error);

    // Junction Box (LSD System)
    $junctionboxlsdsystem07 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Junction Box (LSD System)'") or die($connection-> error);

?>