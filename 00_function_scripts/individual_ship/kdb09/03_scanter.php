<?php

    // db connection
    require "../../../../00_function_scripts/00_db_connection.php";

    // Antenna
    $antenna09 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB09' AND pn.name = 'Antenna'") or die($connection-> error);

    // Transceiver
    $transceiver09 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB09' AND pn.name = 'Transceiver'") or die($connection-> error);

    // Utility Rack
    $utilityrack09 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB09' AND pn.name = 'Utility Rack'") or die($connection-> error);

?>