<?php 
define("MYSQL_HOST", 'localhost');
define("MYSQL_USERNAME", 'root');
define("MYSQL_PASSWORD", '');
define("MYSQL_DB_NAME", 'kent_db');
$mysqli  = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DB_NAME);
if($mysqli->connect_error) {
   echo "Error: Unable to connect to MySQL." . PHP_EOL; 
   echo "Debugging error: " .  $mysqli->connect_error . PHP_EOL;
   exit;  
}
define("ADMIN_TABLE",'admins');
extract($_REQUEST);
