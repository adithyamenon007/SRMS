<?php
$con = mysqli_connect("localhost","root","","SRMS") or die(mysqli_error($con));
$query = "SELECT * from students";
$query_result = mysqli_query($con,$query) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="sms_style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9370DB;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type = "button" class = "navbar-toggle" 
		         data-toggle = "collapse" data-target = "#mynavbar">
		         <span class = "sr-only">Toggle navigation</span>
		         <span class = "icon-bar"></span>
		         <span class = "icon-bar"></span>
		         <span class = "icon-bar"></span>
		      	</button>
				<a href="main_page.php" class="navbar-brand">
				 	<span class="glyphicon glyphicon-book"></span>
				 	Student Record Management System
				</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
			<ul class="nav navbar-nav navbar-right">
		      <li class="active txt"><a href="main_page.php">Home</a></li>
		      <li class="dropdown txt">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="enter.php">Enter Record</a></li>
		          <li><a href="delete.php">Delete Record</a></li>
		          <li><a href="modify.php">Modify Record</a></li>
				  <li><a href="display_all.php">List of Students</a></li>
		        </ul>
		      </li>
		      <li class="txt"><a href="gradeCalc.php">Grade Calculation</a></li>
		      <li class="txt"><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		    </ul>
			</div>
		</div>
	</nav>

	<div class="container extra">
		<form method="post">
		<input type="text" name="search_text" placeholder="Search Roll No...">
		<button class="btn btn-primary" type="submit" name="search"><span class="glyphicon glyphicon-search"></span></button>
		<button class="btn btn-primary" type="submit" name="toppers">Toppers</button>
		<button class="btn btn-primary" type="submit" name="failures">Failures</button>
		</form><br>
		<?php
			if (isset($_POST['search'])) {
				$roll = $_POST['search_text'];
				include 'display_search.php';
			}
			elseif (isset($_POST['toppers'])) {
				header("Location: toppers.php");
			}
			elseif (isset($_POST['failures'])) {
				header("Location: failures.php");
			}
			else{
				while ($row = mysqli_fetch_array($query_result)) { ?>

			<div class="row">
				<div class="col-md-12"><h4>Student <span class="glyphicon glyphicon-user"></span></h4></div>
			</div>
			<div class="row">
				<div class="col-md-2">Name:</div>
				<div class="col-md-10"><?php echo $row['name']; ?></div>
			</div>
			<div class="row">
				<div class="col-md-2">Class:</div>
				<div class="col-md-10"><?php echo $row['class']; ?></div>
			</div>
			<div class="row">
				<div class="col-md-2">Roll No:</div>
				<div class="col-md-10"><?php echo $row['roll_no']; ?></div>
			</div>
			<div class="row">
				<div class="col-md-2">Physics Marks:</div>
				<div class="col-md-10"><?php echo $row['pm']; ?></div>
			</div>
			<div class="row">
				<div class="col-md-2">Chemistry Marks:</div>
				<div class="col-md-10"><?php echo $row['cm']; ?></div>
			</div>
			<div class="row">
				<div class="col-md-2">Maths Marks:</div>
				<div class="col-md-10"><?php echo $row['mm']; ?></div>
			</div>
			<hr style="border: 5px solid blue; border-radius: 2px;">
		<?php }} ?>
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