<?php
// connect to database
$host = "localhost";
$port ="5432";
$dbname = "anis";
$user = "postgres";
$passw = "1234";

$connection = 'host='.$host.' port='.$port.' dbname='.$dbname.' user='.$user.' password='.$passw;

$dbconnect = pg_connect($connection);

if(!$dbconnect){
	echo "db is not established";
}
?>