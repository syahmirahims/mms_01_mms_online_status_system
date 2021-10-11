<?php

    // db connection
    require "../../../00_function_scripts/00_db_connection.php";

    // display table for Server Rack
    $serverrack = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
        
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id
        
    WHERE s.abbv = 'SB' AND pn.name = 'Server Rack'") or die($connection-> error);

    // display table for Multi-Function Workstation (MFW) 1
    $mfw1 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
        
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id

    WHERE s.abbv = 'SB' AND pn.name = 'Multi-Function Workstation (MFW) 1'") or die($connection-> error);

    // display table for Multi-Function Workstation (MFW) 2
    $mfw2 = $connection-> query("SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks

    FROM components c
        
    INNER JOIN component_name cn ON c.name_id = cn.id
    INNER JOIN parts p ON c.parts_id = p.id
    INNER JOIN part_name pn ON p.name_id = pn.id
    INNER JOIN equipment e ON p.equipment_id = e.id
    INNER JOIN ships s ON e.ships_id = s.id
        
    WHERE s.abbv = 'SB' AND pn.name = 'Multi-Function Workstation (MFW) 2'") or die($connection-> error);

?>