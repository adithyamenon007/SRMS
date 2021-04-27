<!DOCTYPE html>
<html>
<head>
	<title>Failures</title>
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

<div class="container-fluid">
	<center>
		<h3 style="color: red;"><span class="glyphicon glyphicon-ban-circle"></span> The Failures <span class="glyphicon glyphicon-ban-circle"></span></h3>
	</center>
</div>

<?php
$con = mysqli_connect("localhost","root","","SRMS") or die(mysqli_error($con));
$fail_query = "SELECT name,class,roll_no,pm,cm,mm,((pm+cm+mm)/3)*100/30 AS percent FROM students";
$fail_query_result = mysqli_query($con,$fail_query);
$num_fails = mysqli_num_rows($fail_query_result);
?>

<div class="container extra">
	<?php if($num_fails>0)
		{
			while($row=mysqli_fetch_array($fail_query_result)) {
				if($row['percent']<33){?>
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
					<div class="row">
						<div class="col-md-2">Overall Percentage:</div>
						<div class="col-md-10"><?php echo $row['percent']; ?></div>
					</div>
					<hr style="border: 5px solid blue; border-radius: 2px;">
		<?php
			}
		else {continue;}
		}}
			else
				{
		?>
		<center>
			<h4 style="color: green;">No Failures :)</h4>
		</center>
		<?php }
		?>
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