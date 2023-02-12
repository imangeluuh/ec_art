<?php 
    $con = mysqli_connect('localhost', 'root', '', 'ec_art');

    if(!$con) {
        die(mysqli_error($con));
    }
?>