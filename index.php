<!DOCTYPE html>
<html>
<head>
	<title>School System</title>
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
         		<img src="images/logo.png" style="width: 200px; height: 200px;">
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
               	
         	    <h3>Login</h3>
            <form action="#" method="post"> 
         			<div class="form-group">
         				<input type="text" name="loginemail" id="loginemail" class="form-control" placeholder="Enter Email">
         			</div>
         			<div class="form-group">
         				<input type="password" name="loginpassword" id="loginpassword" class="form-control" placeholder="Enter password">
         			</div>
         		    <div class="form-group">
         		    	<input type="submit" name="login" id="login" class="btn btn-success btn-block" value="Login">
         		    </div>

         		    <div class="form-group" style="text-align: center;">
         		    	<a href="signup.php"><p>Dont have and account? Sign up here</p></a>
                  <a href="#">
                  <p>Forgot Password ?  Reset Password</p>

                  </a>
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