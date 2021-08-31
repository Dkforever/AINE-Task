<?php
session_start();
include "config.php";

if(isset($_POST['submit']))
{

//$user_id = mysql_real_escape_string($_POST['user_id']);
$company = mysql_real_escape_string($_POST['company']);
$postion = mysql_real_escape_string($_POST['position']);
$skill = mysql_real_escape_string($_POST['skill']);
$salary = mysql_real_escape_string($_POST['salary']);
$city = mysql_real_escape_string($_POST['city']);
$jod_description = mysql_real_escape_string($_POST['job_description']);
$address = mysql_real_escape_string($_POST['address']);



		// Username Check Admin 
		$query = mysql_query("select user_name from empusers where user_name = '$username'") or die(mysql_error());
		if(mysql_num_rows($query)>=1)
		{
			$_SESSION['failure'] = "0";		
			header("location: Post_job.php");
			echo "failed to post";
			exit(0);
		}

        else
		{
			$query = mysql_query("insert into post(company,position,skill,salary,city,job_description,address) values('$company','$postion','$skill','$salary','$city','$job_description','$address')") or die(mysql_error());
			$_SESSION['success'] = $username;		
			header("location: profile.php");
			exit(0);
		}
}

       
          
        ?>