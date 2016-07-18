<?php
date_default_timezone_set("Pacific/Auckland");

/**
 * Created by PhpStorm.
 * User: Duncan
 * Date: 18/07/2016
 * Time: 9:17 AM
 */
$dateFormat = "d/m/y";
$startDate = "18/07/16";

$host = "localhost";
$username = "root";
$password = "";
$database = "hourstracker";

$connect = mysqli_connect($host, $username, $password) or die("Couldn't connect to database.");
$database = mysqli_select_db($connect, $database) or die("Couldn't select database.");