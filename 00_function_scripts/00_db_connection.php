<?php

$connection = mysqli_connect("172.16.112.24:3308", "root", "12345678", "moss_v1");

if (!$connection) {
  die(mysqli_error($connection));
}

?>
