<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "testcdb";

$dbconnected=mysqli_connect($hostname,$username,$password);
if(!$dbconnected)
{
    die("Could not connect: " . mysql_error());
}
$dbselected=mysqli_select_db($dbconnected,$dbname);
?>
