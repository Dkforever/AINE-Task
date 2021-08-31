



<?php
session_start();
include "config.php";

if(isset($_POST['submit']))
{

$name = mysql_real_escape_string($_POST['name']);
$username = mysql_real_escape_string($_POST['user_name']);
$password = mysql_real_escape_string($_POST['password']);
$phone = mysql_real_escape_string($_POST['phone']);
$city = mysql_real_escape_string($_POST['city']);
$skills = mysql_real_escape_string($_POST['skills']);



		// Username Check Admin 
		$query = mysql_query("select user_name from empusers where user_name = '$username'") or die(mysql_error());
		if(mysql_num_rows($query)>=1)
		{
			$_SESSION['failure'] = "1";		
			header("location: login.php");
			echo "failed to signup";
			exit(0);
		}

        else
		{
			$query = mysql_query("insert into empusers(name,user_name,password,phone,city,skills) values('$name','$username','$password','$phone','$city','$skills')") or die(mysql_error());
			$_SESSION['success'] = $username;		
			header("location: login.php");
			exit(0);
		}
}

       
          
        ?>