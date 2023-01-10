<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "database_toy";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("failed to connect");
}

