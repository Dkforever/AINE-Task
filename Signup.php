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
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form class="form-material" action="register.php"  method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text"  name="name" class="form-control" placeholder="Full Name ">
						
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i><span>
						</div>
						<input type="text"name="user_name" class="form-control" placeholder="Email">
						
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password"name="password" class="form-control" placeholder="Passowrd">
						
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class=" fa fa-phone"></i></span>
						</div>
						<input type="text"name="phone" class="form-control" placeholder="Phone no">
						
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
						<input type="text"name="skills" class="form-control" placeholder="Skills">
						
					</div>

					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Sign up" class="btn float-right login_btn">
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
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Alrady have an Account?<a href="login.php">Login</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>