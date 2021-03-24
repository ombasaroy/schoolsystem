<!DOCTYPE html>
<html>
<head>
	<title>School System</title>
<!-- 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


    <div class="container">
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School System</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 
	</div>

	<br>

	<div class="container">
 	  <div class="jumbotron">
         <div class="row">
         	<div class="col" style="text-align: center;">
         		<img src="images/logo.png" style="width: 300px; height: 300;">
         	</div>
         	<div class="col" style="text-align: center;">
         		<p>
         			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
         	</div>
         </div>
 

	   </div>
	</div>

	<br>


	<div class="container">
 	  <div class="jumbotron">
         <div class="row">
         		<h3>Create Account</h3>
              
         		<form action="index.php" method="post"> 
         			<div class="form-group">
         				<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
         			</div>

              <!-- role selection -->
              <div class="form-group">
                <label for="role" style="padding: 10px;">Select User Role</label>
                <select name="role" id="role" class="form-control">
                    <option></option>
                     <option value="Admin">Admin</option>
                     <option value="Student">Student</option>
                </select>
              </div>
        
         			<div class="form-group">
         				<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
         			</div>
         			<div class="form-group">
         				<input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
         			</div>
         			<div class="form-group">
         				<input type="password"  name="repeatpassword" id="repeatpassword" class="form-control" placeholder="Confirm password">
         			</div>

         			<div class="row">
		         		<div class="col" style="text-align: center;">
		         			<input type="submit" name="register" id="register" class="btn btn-success btn-block" value="Create Account">
		         		</div>
		         		<div class="col" style="text-align: center;">
		         			<input type="reset" name="reset" id="reset" class="btn btn-danger btn-block" value="Reset Details">
		         		</div>
		         	</div>

         		    <div class="form-group" style="text-align: center;">
         		    	<a href="index.php"><p>Have an account , proceed to Login</p></a>
         		    </div>
         			

         		</form>
         	
            </div>
 

	   </div>
	</div>



	


<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>