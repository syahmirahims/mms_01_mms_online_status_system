<?php

    // db connection
    require "../../00_function_scripts/00_db_connection.php";

    // kdb06
    $radio06 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB06'";

    // kdb07
    $radio07 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB07'";

    // kdb08
    $radio08 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB08'";
    
    // kdb09
    $radio09 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB09'";   

    // kdb17
    $radio17 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB17'";

    // kdb18
    $radio18 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB18'";

    // kdb19
    $radio19 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB19'";
    
    // kdb20
    $radio20 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB20'";    

    // kdb21
    $radio21 = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'KDB21'";
    
    // noc
    $radioNOC = "SELECT id, radio_name, r_status, r_condition, storob, remarks FROM 00_radio_temporary WHERE location = 'NOC'";   


    // making arrays
    $result06 = mysqli_query($connection, $radio06);
    $result07 = mysqli_query($connection, $radio07);
    $result08 = mysqli_query($connection, $radio08);
    $result09 = mysqli_query($connection, $radio09);
    $result17 = mysqli_query($connection, $radio17);
    $result18 = mysqli_query($connection, $radio18);
    $result19 = mysqli_query($connection, $radio19);
    $result20 = mysqli_query($connection, $radio20);
    $result21 = mysqli_query($connection, $radio21);
    $resultNOC = mysqli_query($connection, $radioNOC);

    $array06 = array();
    $array07 = array();
    $array08 = array();
    $array09 = array();
    $array17 = array();
    $array18 = array();
    $array19 = array();
    $array20 = array();
    $array21 = array();
    $arrayNOC = array();
    if (mysqli_num_rows($result06) > 0) {
        while ($row06 = mysqli_fetch_assoc($result06)) {
            $array06[] = $row06;
        }
    }
    if (mysqli_num_rows($result07) > 0) {
        while ($row07 = mysqli_fetch_assoc($result07)) {
            $array07[] = $row07;
        }
    }
    if (mysqli_num_rows($result08) > 0) {
        while ($row08 = mysqli_fetch_assoc($result08)) {
            $array08[] = $row08;
        }
    }
    if (mysqli_num_rows($result09) > 0) {
        while ($row09 = mysqli_fetch_assoc($result09)) {
            $array09[] = $row09;
        }
    }
    if (mysqli_num_rows($result17) > 0) {
        while ($row17 = mysqli_fetch_assoc($result17)) {
            $array17[] = $row17;
        }
    }
    if (mysqli_num_rows($result18) > 0) {
        while ($row18 = mysqli_fetch_assoc($result18)) {
            $array18[] = $row18;
        }
    }
    if (mysqli_num_rows($result19) > 0) {
        while ($row19 = mysqli_fetch_assoc($result19)) {
            $array19[] = $row19;
        }
    }
    if (mysqli_num_rows($result20) > 0) {
        while ($row20 = mysqli_fetch_assoc($result20)) {
            $array20[] = $row20;
        }
    }
    if (mysqli_num_rows($result21) > 0) {
        while ($row21 = mysqli_fetch_assoc($result21)) {
            $array21[] = $row21;
        }
    }
    if (mysqli_num_rows($resultNOC) > 0) {
        while ($rowNOC = mysqli_fetch_assoc($resultNOC)) {
            $arrayNOC[] = $rowNOC;
        }
    }


    // cell color
    if (condition) {
        # code...
    }
?>