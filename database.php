<!doctype html>
        <title> NoLimits </title>


<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "grad";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
    echo 'connection failed!';
    exit();
}