<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title> 

	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" defer></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
		<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style type="text/css">
    	body
    	{
    		background-image: url(logo.png);
		    background-color: #E0FFFF;
		    background-blend-mode: lighten;
		    overflow-y: scroll;
		    font-family: 'Varela Round', sans-serif;
		}
    </style>
</head>
<body>
	<center>
		<h3 style="padding-top: 130px">Admin Login Page</h3>
	</center>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Please provide the details below
					</div>
					<div class="panel-body">
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="Email" class="form-control" placeholder="Email ID">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Login</button>
							<a href="newpass.php" style="padding-left:130px;">Change Password?</a>
						</form>
						<?php
							if (isset($_POST['submit'])) {
								$con = mysqli_connect("localhost","root","","SRMS") or die(mysqli_error($con));
								$emailID = $_POST['Email'];
								$password = $_POST['password'];
								$query = "select * from login_cred where id = '$emailID' and pass = '$password'";
								$query_result = mysqli_query($con,$query);
								$rows = mysqli_num_rows($query_result);
								if ($rows>0) {
									header("Location: main_page.php");
								}
								else{
									echo "Wrong Credentials";
								}
							}
						?>
					</div>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>

