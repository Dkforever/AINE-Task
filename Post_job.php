


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Sign up  Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Custome CSS Link -->
  <link rel="stylesheet" href="css/post.css">
</head>
<body>


<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Task AIE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">Profile <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
     
     

    </ul>
   
  </div>
  
         <form class="form-inline my-2 my-lg-0">


    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </form> 
  
</nav>

</div>











<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Post Job</h3>
				
			</div>
			<div class="card-body">
				<form class="form-material" action="post_upload.php"  method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-hotel"></i></span>
						</div>
						<input type="text"  name="company" class="form-control" placeholder="Company Name ">
						
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-suitcase" aria-hidden="true"></i><span>
						</div>
						<input type="text"name="position" class="form-control" placeholder="Position">
						
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-tv"></i></span>
						</div>
						<input type="text"name="skill" class="form-control" placeholder="Skills">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text"name="salary" class="form-control" placeholder="Salary">	
					</div>						
					
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text"name="city" class="form-control" placeholder="City">						
					</div>
                		<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text"name="job_description" class="form-control" placeholder="Job Description">
						
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text"name="address" class="form-control" placeholder="Location">
						
					</div>
                    <div class="form-group">
						<input type="submit" name="submit" value="Post" class="btn float-right login_btn">
					</div>
					
				</form>
			</div>
            <?php
							session_start();
							if(isset($_SESSION['failure']))
							{?>
							<p style="text-align: center;background: red;padding: 10px 0px;margin: 5px; color: #fff;">Sorry Username <?php echo $_SESSION['failure']; ?> is not available</p>
							<?php }
							if(isset($_SESSION['success']))
							{
							?>
							<p style="text-align: center;background: yellowgreen;padding: 10px 0px;margin: 5px; color: #fff;">User <?php echo $_SESSION['success']; ?> Successfully Created</p>
							<?php }
							session_destroy();	
							?>
			
				
			</div>
		</div>
	</div>
	
</div>
</body>
</html>