<?php
 include('../db/db.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lifestyle Store</title>
		<link rel="stylesheet" type="text/css" href="indexboot.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<style>
			body{ background-image:url("signupback.jpg");background-size:cover}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class ="container">
				<div class="navbar-header">
					<a href ="indexboot.html" class="navbar-brand">Lifestyle Store</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="cartboot.html"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
						<li><a href="logoutboot.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>	
			</div>	
		</nav>
	<div class="content">	
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class=" panel-body panel mytype1">
						<div class="panel-heading">
							<h3><b>Change Password</b></h3>
						</div>	
						<form>
							<div class="form-group">
								<input type="password" class="form-control" name="oldpassword" placeholder="Old Password"><br>
								<input type="password" class="form-control" name="newpassword" placeholder="New Password"><br>
								<input type="password" class="form-control" name="newpassword2" placeholder="Re-type New Password"><br>
								<button class="btn btn-primary ">Change</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>	
	<footer>	   
		<center>
	   <div class="container">
			<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us:910000000000</p>
		</div>
		</center>
	</footer>
	</body>
</html>			