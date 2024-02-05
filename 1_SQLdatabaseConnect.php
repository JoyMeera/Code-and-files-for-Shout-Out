<?php
$db_host='localhost';
$db_database='shoutout_db';
$db_username= 'root';
$db_password='';

// Create connection
$connection1= mysqli_connect($db_host, $db_username, $db_password,$db_database);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>