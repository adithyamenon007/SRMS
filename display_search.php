<?php
	
	$con = mysqli_connect("localhost", "root", "", "SRMS") or die(mysqli_error($con));
	$search_query = "SELECT * FROM students WHERE roll_no = $roll";
	$search_query_result = mysqli_query($con, $search_query) or die(mysqli_error($con));
	$row_num = mysqli_num_rows($search_query_result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Display page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="sms_style.css">
</head>
<body>
	<div class="container extra">
		<?php 
			if ($row_num>0)
			{
				while ($row = mysqli_fetch_array($search_query_result)) {?>	

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
		<?php
			}
		}
			else
				echo "No Such Student Exists. Maybe you typed the wrong roll number :/";
		?>
		<br>
		<a href="display_all.php" class="btn btn-primary">Would you like to search again?</a>
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