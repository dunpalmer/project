<?php
require_once('functions.php');

/**
 * Created by PhpStorm.
 * User: Duncan
 * Date: 18/07/2016
 * Time: 9:02 AM
 */
$today = date($dateFormat);
$startTime = "8:30";
$endTime = "16:00";

$daysSinceStart = $today - $startDate;

if(!hasRecordForDate($today)) {
    //Input hours worked for today
    if(!insertRecordForDate($today, $startTime, $endTime)) {
        print("Couldn't add record for today: <br>" . mysqli_error($connect));
    } else {
        print("Added Record!");
    }
}
?>
<html>
    <head>
        <title>Internship Hours Tracker</title>
    </head>

    <body>

    </body>
</html>
