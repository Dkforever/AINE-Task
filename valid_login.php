<?php
session_start();
include "config.php";
$username = mysql_real_escape_string($_POST['user_name']);
$password = mysql_real_escape_string($_POST['password']);



// Super Admin Login 
$query = mysql_query("select user_name,password from empusers where user_name = '$username' and password='$password'") or die(mysql_error());
		
		if(mysql_num_rows($query)>=1)
		{
			$_SESSION['user'] = "admin";
			$_SESSION['user_name'] = $username;			
			header("location: profile.php");
			exit(0);
		}
		
		
// Doctor Login	
/*	
$query = mysql_query("select hms_dr_user,hms_dr_pwd from hms_dr where BINARY hms_dr_user = '$username' and BINARY hms_dr_pwd='$password'") or die(mysql_error());
		
		if(mysql_num_rows($query)>=1)
		{
			$_SESSION['user'] = "doctor";	
			$_SESSION['uid'] = $username;				
			header("location: dashboard.php");
			exit(0);
		}

// Staff Login		
$query = mysql_query("select hms_staff_user,hms_staff_pwd from hms_staff where BINARY hms_staff_user = '$username' and BINARY hms_staff_pwd='$password'") or die(mysql_error());
		
		if(mysql_num_rows($query)>=1)
		{
			$_SESSION['user'] = "staff";
			$_SESSION['uid'] = $username;			
			header("location: dashboard.php");
			exit(0);
		}

// Pharma Login		
$query = mysql_query("select hms_pharma_user,hms_pharma_pwd from hms_pharma where BINARY hms_pharma_user = '$username' and BINARY hms_pharma_pwd='$password'") or die(mysql_error());
		
		if(mysql_num_rows($query)>=1)
		{
			$_SESSION['user'] = "pharma";		
			header("location: dashboard.php");
			exit(0);
		}  

// Patient Login		
$query = mysql_query("select user_name,password from empusers where BINARY user_name = '$username' and BINARY password='$password'") or die(mysql_error());
		
		if(mysql_num_rows($query)>=1)
		{
			$_SESSION['user'] = "user";
			$_SESSION['uid'] = $username;			
			header("location: home.php");
			exit(0);
		}*/
		
		else
		{
			$_SESSION['failure'] = "1";
			header("location: signup.php");
		}

        
		
?>