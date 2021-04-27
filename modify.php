<!DOCTYPE html>
<html>
<head>
	<title>Modification Page</title>
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

	<div class="container">
		<h3 style="text-align: center;">Student Modification Page</h3><br>
		<marquee style="color: red;">*This system works by identifying the roll numbers of the students. So please make sure you enter the correct details or else you will have to delete the record and enter in again. Thank you for reading :)</marquee>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary extra">
					<div class="panel-heading">
						Enter the details correctly:
					</div>
					<div class="panel-body">
						<form method="post" action="mod_conf.php">
							<div class="form-group">
								<label for="cur_roll">Current Roll number:</label>
								<input type="text" name="cur_roll" class="form-control">
							</div>
                            <div class="form-group">
								<label for="name">New Name of the Student:</label>
								<input type="text" name="name" class="form-control" placeholder="If no change then type it as it was before">
							</div>
							<div class="form-group">
								<label for="class">New Class:</label>
								<input type="text" name="class" class="form-control" placeholder="If no change then type it as it was before">
							</div>
							<div class="form-group">
								<label for="new_roll">New Roll No.:</label>
								<input type="text" name="new_roll" class="form-control" placeholder="If no change then type it as it was before">
							</div>
							<div class="form-group">
								<label for="pm">New Physics Marks:</label>
								<input type="text" name="pm" class="form-control" placeholder="If no change then type it as it was before">
							</div>
							<div class="form-group">
								<label for="cm">New Chemistry Marks:</label>
								<input type="text" name="cm" class="form-control" placeholder="If no change then type it as it was before">
							</div>
							<div class="form-group">
								<label for="mm">New Maths Marks:</label>
								<input type="text" name="mm" class="form-control" placeholder="If no change then type it as it was before">
                            </div>
							<button class="btn btn-primary" name="submit">Submit</button>
						</form>
					</div>
				</div>
			</div>
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