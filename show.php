<?php
session_start();
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up  Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Custome CSS Link -->
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
    include "header.php";
   ?>
        
        <div class="card">
         <h5 class="card-header"><i class="fa fa-home"></i>Featured</h5>
          <div class="card-body">
           <h5 class="card-title">  Special title treatment</h5>
          <p class="card-text">With supporting text below as a <?php echo $row['company'];?> natural lead-in to additional content.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
        </div>






        <div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="box box-block bg-white">
							<h5 class="m-b-1">Billing History</h5>
							<table class="table table-striped table-bordered dataTable" id="table-2">
								<thead>
									<tr>
										<th>Index</th>
										<th>Patient Name</th>
										<th>Doctor Treated</th>
										<th>Appointment Date</th>
										<th>Appointment Time</th>
										<th>Treatment Charges</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
								$exe_qry = mysql_query("select * from post where user_id <> 'no'");
								
								$i=1;
								if(mysql_num_rows($exe_qry)>0)
								{
								while($row=mysql_fetch_array($exe_qry) )
								{
								?>
									<tr>
										<td><?php echo $i++;?></td>
										<td><?php echo $row['company'];?></td>
										<td><?php echo $row['position'];?></td>
										<td><?php echo $row['skill'];?></td>
										<td><?php echo $row['salary'];?></td>
										<td><?php echo $row['city'];?></td>
									</tr>

                                    <p>hi Dkforever <?php echo $row['company'];?>  </p>
                                    
									
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
								</tbody>
							</table>
						</div>
					</div>
				</div>
			
						
			
</body>
</html>