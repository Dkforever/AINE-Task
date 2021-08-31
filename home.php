<?php

include "config.php";
include "header.php";

?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
  <body>

<!-- home Page  -->

<div class="container-fluid">
  <div class="row boxd">
    
 <div class="col-sm-7 box1 "> 
<h1 class="inline">Find A Job at India's No.1 Job Site</h1>
<nav class="navbar navbar-expand-lg  ">
<form class="form-inline my-3 my-lg-0">
  <ul class="navbar-nav mr-auto">
 
 <li><input class="form-control mr-sm-6" type="search" placeholder="Search" aria-label="Search"> </li>
  <li><button class="btn btn-outline-success my-2 my-sm-2" type="submit">Search</button></li>
</ul>
</form> </nav>
 </div>
 
  <!-- Box 2 and 3 From home page header -->
            <div class="col-sm-2 box2">
              <p>NEW TO TASK AIE ?</p>
              <a href="Signup.php">Register With us</a><br><br>
              <a class="btn btn-primary" href="Post_job.php" role="button">Upload Your Resume</a>
             
             
            </div>
            <div class="col-sm-2 box3">

              <p>Are You Employer ?</p>
              <a href="Post_job.php">Join us us</a><br><br>
              <a class="btn btn-primary" href="Post_job.php" role="button">Post Job</a>

           
            </div>
                 
   </div> 
  </div>


<div class=container-fluid>
  <div class="row">
    <div class="col-sm-3 box1">box1
      
    </div>
   






    <div class="col-sm-6 box5">
    <div class="card">

    <?php
								$exe_qry = mysql_query("select * from post where user_id <> 'no'");
								
								$i=1;
								if(mysql_num_rows($exe_qry)>0)
								{
								while($row=mysql_fetch_array($exe_qry) )
								{
								?>
								
                  <h3 class="card-header"><i class="fa fa-home"></i> <?php echo $row['company'];?></h3>

                  <div class="card-body">
           <h4 class="card-title"><i class="fa fa-user"></i>Role <?php echo $row['position'];?> </h4>
           <h4 class="card-title"><i class="fa fa-tv"></i>Skills <?php echo $row['skill'];?> </h4>
           <h4 class="card-title"><i class="fa fa-suitcase"></i>Salary: <?php echo $row['salary'];?></h4>
           <h4 class="card-title"><i class="fa fa-home"></i>City: <?php echo $row['city'];?></h4>
          <p class="card-text">With supporting text below as a natural lead-in to additional content .</p>
         <a href="#" class="btn btn-primary">Apply </a>
         </div>
                                    
                                    
									
								<?php 
								}
								}
								else
								{
									?>
									<tr>
										No Jobs available
									</tr>	
									<?php
								}
								?>	

         
        </div>

    </div>




    <div class="col-sm-2 box3">
          
          <div class="card">
         <h3 class="card-header"> Recent Jobs </h3>
         <?php
								$exe_qry = mysql_query("select * from post where user_id <> 'no'");
								
								$i=1;
								if(mysql_num_rows($exe_qry)>0)
								{
								while($row=mysql_fetch_array($exe_qry) )
								{
								?>
								
                  <h3 class="card-header"><i class="fa fa-home"></i> <?php echo $row['company'];?></h3>

             
                                    
                                    
									
								<?php 
								}
								}
								else
								{
									?>
									<tr>
										No Patient Have Requested An Appointment
									</tr>	
									<?php
								}
								?>	






         </div>
        </div>




        </div>
  </div>
</div>

<!-- Home Ends here -->

  <!-- Coursel Code -->

  <div class="container">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/chicago.jpg" alt="Los Angeles" style="width:30%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/la.jpg" alt="Chicago" style="width:30%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/ny.jpg" alt="New York" style="width:30%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- coursel code ends here -->



  </body>
  </html>
