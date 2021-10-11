<!-- db connection -->
<?php $connection = new mysqli("172.16.112.24:3308", "root", "12345678", "moss_v1") or die(mysqli_error($connection)); ?>

<!-- Antenna -->
<?php
    $antenna06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'Antenna'";

    $antenna07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Antenna'";

    $antenna08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'Antenna'";

    $antenna09 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB09' AND pn.name = 'Antenna'";

    $result_antenna06 = mysqli_query($connection, $antenna06);
    $result_antenna07 = mysqli_query($connection, $antenna07);
    $result_antenna08 = mysqli_query($connection, $antenna08);
    $result_antenna09 = mysqli_query($connection, $antenna09);    

    $antenna06_array = array();
    $antenna07_array = array();
    $antenna08_array = array();
    $antenna09_array = array();
    if (mysqli_num_rows($result_antenna06) > 0) {
        while($antenna06_row = mysqli_fetch_assoc($result_antenna06)){
            $antenna06_array[] = $antenna06_row;
        }
    }
    if (mysqli_num_rows($result_antenna07) > 0) {
        while($antenna07_row = mysqli_fetch_assoc($result_antenna07)){
            $antenna07_array[] = $antenna07_row;
        }
    }
    if (mysqli_num_rows($result_antenna07) > 0) {
        while($antenna08_row = mysqli_fetch_assoc($result_antenna08)){
            $antenna08_array[] = $antenna08_row;
        }
    }
    if (mysqli_num_rows($result_antenna07) > 0) {
        while($antenna09_row = mysqli_fetch_assoc($result_antenna09)){
            $antenna09_array[] = $antenna09_row;
        }
    }
?>

<!-- Transceiver -->
<?php
    $transceiver06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob , c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'Transceiver'";

    $transceiver07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob , c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Transceiver'";

    $transceiver08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob , c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'Transceiver'";

    $transceiver09 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob , c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB09' AND pn.name = 'Transceiver'";

    $result_transceiver06 = mysqli_query($connection, $transceiver06);
    $result_transceiver07 = mysqli_query($connection, $transceiver07);
    $result_transceiver08 = mysqli_query($connection, $transceiver08);
    $result_transceiver09 = mysqli_query($connection, $transceiver09);    

    $transceiver06_array = array();
    $transceiver07_array = array();
    $transceiver08_array = array();
    $transceiver09_array = array();
    if (mysqli_num_rows($result_transceiver06) > 0) {
        while($transceiver06_row = mysqli_fetch_assoc($result_transceiver06)){
            $transceiver06_array[] = $transceiver06_row;
        }
    }
    if (mysqli_num_rows($result_transceiver07) > 0) {
        while($transceiver07_row = mysqli_fetch_assoc($result_transceiver07)){
            $transceiver07_array[] = $transceiver07_row;
        }
    }
    if (mysqli_num_rows($result_transceiver08) > 0) {
        while($transceiver08_row = mysqli_fetch_assoc($result_transceiver08)){
            $transceiver08_array[] = $transceiver08_row;
        }
    }
    if (mysqli_num_rows($result_transceiver09) > 0) {
        while($transceiver09_row = mysqli_fetch_assoc($result_transceiver09)){
            $transceiver09_array[] = $transceiver09_row;
        }
    }
?>

<!-- Utility Rack -->
<?php
    $utilityrack06 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB06' AND pn.name = 'Utility Rack'";

    $utilityrack07 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB07' AND pn.name = 'Utility Rack'";

    $utilityrack08 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB08' AND pn.name = 'Utility Rack'";

    $utilityrack09 = "SELECT c.id, cn.name, c.c_status, c.c_condition, c.storob, c.remarks 
    FROM components c 
    
    INNER JOIN component_name cn ON c.name_id = cn.id 
    INNER JOIN parts p ON c.parts_id = p.id 
    INNER JOIN part_name pn ON p.name_id = pn.id 
    INNER JOIN equipment e ON p.equipment_id = e.id 
    INNER JOIN ships s ON e.ships_id = s.id 
    
    WHERE s.abbv = 'KDB09' AND pn.name = 'Utility Rack'";

    $result_utilityrack06 = mysqli_query($connection, $utilityrack06);
    $result_utilityrack07 = mysqli_query($connection, $utilityrack07);
    $result_utilityrack08 = mysqli_query($connection, $utilityrack08);
    $result_utilityrack09 = mysqli_query($connection, $utilityrack09);    

    $utilityrack06_array = array();
    $utilityrack07_array = array();
    $utilityrack08_array = array();
    $utilityrack09_array = array();
    if (mysqli_num_rows($result_utilityrack06) > 0) {
        while($utilityrack06_row = mysqli_fetch_assoc($result_utilityrack06)){
            $utilityrack06_array[] = $utilityrack06_row;
        }
    }
    if (mysqli_num_rows($result_utilityrack07) > 0) {
        while($utilityrack07_row = mysqli_fetch_assoc($result_utilityrack07)){
            $utilityrack07_array[] = $utilityrack07_row;
        }
    }
    if (mysqli_num_rows($result_utilityrack08) > 0) {
        while($utilityrack08_row = mysqli_fetch_assoc($result_utilityrack08)){
            $utilityrack08_array[] = $utilityrack08_row;
        }
    }
    if (mysqli_num_rows($result_utilityrack09) > 0) {
        while($utilityrack09_row = mysqli_fetch_assoc($result_utilityrack09)){
            $utilityrack09_array[] = $utilityrack09_row;
        }
    }
?>