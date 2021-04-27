<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title> 

	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="sms_style.css">
</head>
<body>
	<center>
		<h3 style="padding-top: 130px">Change Password</h3>
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
								<input type="text" name="email" class="form-control" placeholder="Email ID">
							</div>
                            <div class="form-group">
								<input type="password" name="curpass" class="form-control" placeholder="Current Password">
							</div>
							<div class="form-group">
								<input type="password" name="newpass" class="form-control" placeholder="New Password">
							</div>
                            <div class="form-group">
								<input type="password" name="renewpass" class="form-control" placeholder="Retype New Password">
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Confirm</button>
						</form>
						<?php
							if (isset($_POST['submit'])) 
							{
								$con = mysqli_connect("localhost","root","","SRMS") or die(mysqli_error($con));
								$email = $_POST['email'];
                                $curpass = $_POST['curpass'];
                                $newpass = $_POST['newpass'];
                                $renew = $_POST['renewpass'];
								$query = "SELECT * FROM login_cred WHERE id='$email' and pass='$curpass'";
								$query_result = mysqli_query($con,$query) or die(mysqli_error($con));
								$rows = mysqli_num_rows($query_result);
								if ($rows>0) 
								{
                                    if($newpass == $renew)
									{
                                        $newquery = "UPDATE login_cred SET pass='$newpass' WHERE id='$email'";
                                        $newquery_res = mysqli_query($con,$newquery) or die(mysqli_error($con));
                                        echo "Password Changed";
                                    }
                                    else
									{
                                        echo "You re-typed incorrect password";
                                    }
								}
								else{
									echo "Wrong Email ID or current password";
								}
							}
						?>
					<br>
					<a href="login.php">Return to login?</a>
					</div>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>

