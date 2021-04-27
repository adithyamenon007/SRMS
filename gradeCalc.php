<?php
$con = mysqli_connect("localhost","root","","SRMS") or die(mysqli__error($con));
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Grade Calculation
	</title>
	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
        <style>
        	<?php include "sms_style.css" ?>
        </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9370DB;box-shadow: 5px 5px 10px 3px;">
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

	<div class="container calculator">
		<div>
			<center>
				<h2><i class="fa fa-calculator"></i> Grade Calculation</h2> 
			</center>
			<hr style="background-color: black;width: 80%;">
		</div>
		<div>
			<form method="post" action="">
				<div class="form-group" style="display: flex; flex-direction: row;">
					<label for="roll" style="text-align: right;">Enter The Roll number:  </label>
					<input type="text" name="roll" class="form-control" style="width: 50%;margin-left: 10px">
				</div>
				<button class="btn btn-primary" type="submit" name="submit">Check Overall Percentage</button>
			</form>
			<?php
			$con = mysqli_connect("localhost","root","","SRMS") or die(mysqli_error($con));
			if(isset($_POST['submit'])){
				$roll = $_POST['roll'];
				$query = "SELECT pm,cm,mm,((pm+cm+mm)/3)*100/30 AS percent FROM students WHERE roll_no = $roll";
				$query_res = mysqli_query($con,$query) or die(mysqli_error($con));
				$row_num = mysqli_num_rows($query_res);
				if($row_num>0)
				{
					while($row=mysqli_fetch_array($query_res)){?>
						<h5>Percentage is : </h5>
						<?php echo $row['percent'];
						if($row['percent']<=100 and $row['percent']>90){?>
							<h5>Grade = A+</h5><?php }?>
						<?php if($row['percent']<=90 and $row['percent']>80){?>
							<h5>Grade = A</h5><?php }?>
						<?php if($row['percent']<=80 and $row['percent']>70){?>
							<h5>Grade = B+</h5><?php }?>
						<?php if($row['percent']<=70 and $row['percent']>60){?>
							<h5>Grade = B</h5><?php }?>
						<?php if($row['percent']<=60 and $row['percent']>50){?>
							<h5>Grade = C+</h5><?php }?>
						<?php if($row['percent']<=50 and $row['percent']>40){?>
							<h5>Grade = C</h5><?php }?>
						<?php if($row['percent']<=40 and $row['percent']>32){?>
							<h5>Grade = D</h5><?php }?>
						<?php if($row['percent']<=32){?>
							<h5>Grade = E (failed)</h5><?php }?>	
					<?php }
				}
			}
			?>
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