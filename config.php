<?php
$server_name = 'localhost';
$username = 'root';
$password = '';

$database_name = 'task';

$connect = mysql_connect($server_name,$username,$password) or die("Unable to connect to SQL Server.");

$db = mysql_select_db($database_name)or die("Unable to connect to SQL database.");;
if($db && $connect)
{
	echo "server connectedd";
}
else 
{
  	echo "Server Busy...! Pls Try Again After Sometime...";
  	return false;	
}
?>