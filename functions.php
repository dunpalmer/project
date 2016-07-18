<?php
require('config.php');
/**
 * Created by PhpStorm.
 * User: Duncan
 * Date: 18/07/2016
 * Time: 10:46 AM
 */
function insertRecordForDate($date, $start, $finish) {

    $BROKEIT = null;
    
    $query = mysqli_query($GLOBALS['connect'], "INSERT INTO `hours` (`date`, `start`, `finish`) VALUES('$date', '$start', '$finish')");

    if($query) {
        return true;
    } else {
        return false;
    }
}

function hasRecordForDate($date) {

    $query = mysqli_query($GLOBALS['connect'], "SELECT * FROM `hours` WHERE(`date`='$date')");

    //There is record for date
    if(mysqli_num_rows($query) >= 1) {
        return true;
    }

    //No record for date
    return false;
}