<?php

$con = mysqli_connect("localhost","root","","SRMS") or die(mysqli_error($con));
$name = $_POST['name'];
$class = $_POST['class'];
$roll_no = $_POST['roll'];
$pm = $_POST['pm'];
$cm = $_POST['cm'];
$mm = $_POST['mm'];
$query = "INSERT INTO students (name, class, roll_no, pm, cm, mm) values ('$name', '$class', '$roll_no', '$pm', '$cm', '$mm')";
$query_result = mysqli_query($con, $query) or die(mysqli_error($con));

?>

<!DOCTYPE html>
<html>
<head>
	<title>entry confirm</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="sms_style.css">
</head>
<body>
	<div class="container">
		<center>
			<h3><span class="glyphicon glyphicon-ok-circle"></span> Student Record Created Successfuly. <span class="glyphicon glyphicon-ok-circle"></span></h3><br>
		</center>
	</div>
	<div class="container-fluid" style="padding-left: 35px">
			<div class="col-md-2 col-md-offset-4">
				<a href="main_page.php" class="btn btn-primary">Return to Main Page</a>
			</div>
			<div class="col-md-2" style="padding-right: 0px;">
				<a href="display_all.php" class="btn btn-primary">Check all student records</a>
			</div>
	</div>
	<footer>
        <div class="container">
           <p style="text-align:center">
                    Copyright @ SRMIST | Contact Us: +91 91000 91000
           </p>
       </div>
   </footer>
</body>
</html>

