<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Project";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
